<?php
/**
 * Extended class for assemblies
 */
class ElggAssembly extends CrudObject {

	/**
	 * Set subtype to assembly.
	 */
	protected function initializeAttributes() {
		parent::initializeAttributes();

		$this->attributes['subtype'] = "assembly";
	}
}
