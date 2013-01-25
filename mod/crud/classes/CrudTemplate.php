<?php

/**
 * CrudTemplate
 * Contains all crud class information.
 */
class CrudTemplate {
	function __construct($type) {
		// type of the described crud
		$this->crud_type = $type;

		// array describing member variables
		$this->variables = array();

		// module this class resides on
		$this->module = $type;

		// type for children, if not defined no children controls
		// will be generated
		$this->children_type = false;

		// property that defines categories for children
		$this->children_categories = false;

		// variable to use for generating an icon representation
		$this->icon_var = false;

		// whether children should be embedded
		$this->embed = false;

		// List variables
		// variable to use for ordering entity listings
		$this->list_order = false;

		// variable to use for direction in ordering entity listings
		$this->list_order_direction = 'ASC';

		// variable to use for generating tabs on entity listings
		$this->list_tabs = false;

	}

	/**
	 *	Get the string prefix for language strings.
	 */
	function getStringPrefix() {
		return "$this->module:$this->crud_type";
	}

	/**
	 *	Get the default value for some variable.
	 */
	function getDefaultValue($name, $default=NULL) {
		if (isset($this->variables[$name]) && isset($this->variables[$name]['default_value'])) {
                        return $this->variables[$name]['default_value'];
                }
		return $default;
	}

	/**
	 *	Get data for the given variable
	 */
	function getVariableData($name) {
		if (isset($this->variables[$name])) {
                        return $this->variables[$name];
                }
	}

	/**
	 *	Get the content for a list tab based on selected tab
	 */
	function getDateTabContent() {
		$tab_var = $this->variables[$this->list_tabs];
		$first_option = $tab_var->options[0];
		$selected_tab = get_input('filter', $first_option);

		$container_guid = elgg_get_page_owner_guid();

		$options = array(
			'type' => 'object',
			'subtype' => $this->crud_type,
			'limit' => 10,
		#       'order_by' => 'e.last_action desc',
			'container_guid' => $container_guid,
			'full_view' => false,
        	);
		if ($selected_tab == 'next') {
			$operand = '>=';
			$direction = 'ASC';
			$metadata_search = true;
		}
		elseif ($selected_tab == 'previous') {
			$operand = '<';
			$direction = 'DESC';
			$metadata_search = true;
		}
		if ($metadata_search) {
			$options['metadata_name_value_pairs'] = array(
                               array('name' => 'date',
					'operand' => $operand,
                                        'value' => time())
                                );

			$metadata_search = true;
	                $options['order_by_metadata'] = array('name' => 'date',
                                                      'direction' => $direction);

			$content = elgg_list_entities_from_metadata($options);
		}
		else {
			$content = elgg_list_entities($options);
		}
		if (!$content) {
			$content = elgg_echo($this->module.':'.$this->crud_type.':none');
		}
		return $content;
	}


	/**
	 *	Get the content for a list tab based on selected tab
	 */
	function getListTabContent() {
		if ($this->list_tabs == 'date') {
			return $this->getDateTabContent();
		}
		$tab_var = $this->variables[$this->list_tabs];
		$first_option = $tab_var->options[0];
		$selected_tab = get_input('filter', $first_option);

		$container_guid = elgg_get_page_owner_guid();

		$options = array(
			'type' => 'object',
			'subtype' => $this->crud_type,
			'limit' => 10,
		#       'order_by' => 'e.last_action desc',
			'container_guid' => $container_guid,
			'full_view' => false,
        	);
		if ($this->list_tabs && $selected_tab != 'all') {
			$metadata_search = true;
			$options['metadata_name_value_pairs'] = array(
                                array('name' => $this->list_tabs,
                                        'value' => $selected_tab)
                                );
		}
		if ($this->list_order) {
			$metadata_search = true;
	                $options['order_by_metadata'] = array('name' => $this->list_order,
                                                      'direction' => $this->list_order_direction);
		}
		if ($metadata_search) {
			$content = elgg_list_entities_from_metadata($options);
		}
		else {
			$content = elgg_list_entities($options);
		}
		if (!$content) {
			$content = elgg_echo($this->module.':'.$this->crud_type.':none');
		}
		return $content;
	}

	/**
	 *	Show the header for a list tab based on date
	*/
	function getDateTabFilter() {
		$tab_var = $this->variables[$this->list_tabs];
		$first_option = $tab_var->options[0];
		$selected_tab = get_input('filter', $first_option);
		$filter = elgg_view('crud/crud_date_sort_menu',
					array('selected' => $selected_tab, 
					'crud' => $this));
		return $filter;
	}

	/**
	 *	Show the header for a list tab based on selected tab
	*/
	function getListTabFilter() {
		if (!$this->list_tabs)
			return '';
		if ($this->list_tabs == 'date')
			return $this->getDateTabFilter();;
		$tab_var = $this->variables[$this->list_tabs];
		$first_option = $tab_var->options[0];
		$selected_tab = get_input('filter', $first_option);
		$filter = elgg_view('crud/crud_sort_menu',
			array('selected' => $selected_tab,
			'crud' => $this));
		return $filter;
	}
}
