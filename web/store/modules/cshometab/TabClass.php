<?php

class TabClass extends ObjectModel
{
	public $id_tab;
	public $product_type;
	public $position;
	public $display;
	public $title;
	public $product_type_menu;
	public $product_list = false;
	
	protected $tables = array ('cshometab', 'cshometab_lang');
	protected $table = 'cshometab';
	protected $identifier = 'id_tab';
	
	protected $fieldsRequiredLang = array('title');
	
	protected $fieldsValidate = array(
		'display' => 'isBool'
	);
	protected 	$fieldsValidateLang = array(
		'title' => 'isCatalogName'
	);
	
	public function __construct($id = NULL, $id_lang = NULL)
	{
		parent::__construct($id, $id_lang);
		$this->product_type_menu = (int)(preg_replace("/[^0-9]/", '', $this->product_type));
	}
	
	public function getFields()
	{
	//	parent::validateFields();
		
		$fields['id_tab'] = pSQL($this->id_tab);
		$fields['display'] = pSQL($this->display);
		$fields['product_type'] = pSQL($this->product_type);
		$fields['position'] = pSQL($this->position);

		return $fields;
	}
	
	public function getTranslationsFieldsChild()
	{
		self::validateFieldsLang();

		$fieldsArray = array('title');
		$fields = array();
		$languages = Language::getLanguages(false);
		$defaultLanguage = (int)(Configuration::get('PS_LANG_DEFAULT'));
		foreach ($languages as $language)
		{
			$fields[$language['id_lang']]['id_lang'] = (int)($language['id_lang']);
			$fields[$language['id_lang']][$this->identifier] = (int)($this->id);
			foreach ($fieldsArray as $field)
			{
				if (!Validate::isTableOrIdentifier($field))
					die(Tools::displayError());
				if (isset($this->{$field}[$language['id_lang']]) AND !empty($this->{$field}[$language['id_lang']]))
					$fields[$language['id_lang']][$field] = pSQL($this->{$field}[$language['id_lang']], true);
				elseif (in_array($field, $this->fieldsRequiredLang))
				{
					if ($this->{$field} != '')
						$fields[$language['id_lang']][$field] = pSQL($this->{$field}[$defaultLanguage]);
				}
				else
					$fields[$language['id_lang']][$field] = '';
			}
		}
		return $fields;
	}
	
	public function copyFromPost()
	{
		foreach ($_POST AS $key => $value)
			if (key_exists($key, $this) AND $key != 'id_'.$this->table)
				$this->{$key} = $value;
		if($this->product_type == "choose_the_category")
			$this->product_type .= '_'.$this->product_type_menu;
		
		if (sizeof($this->fieldsValidateLang))
		{
			$languages = Language::getLanguages(false);
			foreach ($languages AS $language)
				foreach ($this->fieldsValidateLang AS $field => $validation)
					if (isset($_POST[$field.'_'.(int)($language['id_lang'])]))
						$this->{$field}[(int)($language['id_lang'])] = $_POST[$field.'_'.(int)($language['id_lang'])];
		}
	}
	
	public static function getNextPosition()
	{
		$max = Db::getInstance()->getValue('SELECT MAX(position)+1 FROM `'._DB_PREFIX_.'cshometab`');
		return ($max ? $max : 0);
	}
	
	public function validateController($htmlentities = true)
	{
		$errors = array();
		
		if($this->product_type == "choose_the_category_" AND (!isset($this->product_type_menu) or $this->product_type_menu == ""))
			$errors[] = '<b>Get Product From</b>: '.Tools::displayError('Choose a category.');
		
		$defaultLanguage = (int)(Configuration::get('PS_LANG_DEFAULT'));
		$field = "title";
		if (!$this->{$field} OR !sizeof($this->{$field}) OR ($this->{$field}[$defaultLanguage] !== '0' AND empty($this->{$field}[$defaultLanguage])))
			$errors[] = '<b>Title</b> '.Tools::displayError('is empty for default language.');

		$validate = new Validate();
		foreach ($this->fieldsValidateLang as $fieldArray => $method)
		{
			if (!is_array($this->{$fieldArray}))
				continue ;
			foreach ($this->{$fieldArray} as $k => $value)
				if (!method_exists($validate, $method))
					die (Tools::displayError('Validation function not found.').' '.Tools::safeOutput($method));
				elseif (!empty($value) AND !call_user_func(array('Validate', $method), $value))
				{
					$errors[] = Tools::displayError('The following field is invalid according to the validate method ').'<b>'.$method.'</b>:<br/> ('.self::displayFieldName($fieldArray, get_class($this), $htmlentities).' = '.$value.' '.Tools::displayError('for language').' '.$k;
				}
		}
		
		return $errors;
	}
	
	public function updatePosition($way, $position)
	{
		if (!isset($position))
			return false;

		$result = (Db::getInstance()->Execute('
			UPDATE `'._DB_PREFIX_.'cshometab`
			SET `position`= `position` '.($way ? '- 1' : '+ 1').'
			WHERE `position`
			'.($way
				? '> '.(int)($this->position).' AND `position` <= '.(int)($position)
				: '< '.(int)($this->position).' AND `position` >= '.(int)($position)))
		AND Db::getInstance()->Execute('
			UPDATE `'._DB_PREFIX_.'cshometab`
			SET `position` = '.(int)($position).'
			WHERE `id_tab`='.(int)($this->id_tab)));
		return $result;
	}
	
	public function updateStatus($status)
	{
		if (!isset($status))
			return false;
		if($status == 0)
			$status = 1;
		else 
			$status = 0;
		$result = (Db::getInstance()->Execute('
			UPDATE `'._DB_PREFIX_.'cshometab`
			SET `display`='.$status.'
			WHERE `id_tab`='.(int)($this->id_tab)));
		return $result;
	}
	
	
	public static function cleanPositions()
	{
		$return = true;

		$result = Db::getInstance()->ExecuteS('
		SELECT `id_tab`
		FROM `'._DB_PREFIX_.'cshometab`
		ORDER BY `position`');
		$sizeof = sizeof($result);
		for ($i = 0; $i < $sizeof; $i++){
				$sql = '
				UPDATE `'._DB_PREFIX_.'cshometab`
				SET `position` = '.(int)($i).'
				WHERE `id_tab` = '.(int)($result[$i]['id_tab']);
				$return &= Db::getInstance()->Execute($sql);
			}
		return $return;
	}
	
	public function delete()
	{
		parent::delete();
		$this->cleanPositions();
	}
	
	public function getProductList($nb = 10)
	{
		global $cookie;
		if(strpos($this->product_type, "featured_products") !== false)
		{
			$category = new Category(Context::getContext()->shop->getCategory(), (int)Context::getContext()->language->id);
			$this->product_list = $category->getProducts((int)Context::getContext()->language->id, 1, $nb);
		}
		elseif(strpos($this->product_type, "special_products") !== false)
		{
			$this->product_list = Product::getPricesDrop((int)($cookie->id_lang), 0, $nb);
		}
		elseif(strpos($this->product_type, "topseller_products") !== false)
		{
			$this->product_list = ProductSale::getBestSales((int)($cookie->id_lang), 0, $nb);
		}
		elseif(strpos($this->product_type, "new_products") !== false)
		{
			$this->product_list = Product::getNewProducts((int)($cookie->id_lang), 0, $nb);
		}
		elseif(strpos($this->product_type, "choose_the_category") !== false)
		{
			$category = new Category((int)$this->product_type_menu, (int)Context::getContext()->language->id);
			$this->product_list = $category->getProducts((int)($cookie->id_lang), 1, $nb);
		}
		
	}
}

?>
