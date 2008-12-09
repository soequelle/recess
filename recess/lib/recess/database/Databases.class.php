<?php
/**
 * Registry of Database Sources
 *
 * @author Kris Jordan
 * @package Recess! Framework
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link http://www.recessframework.org/
 */
class Databases {
	
	const DEFAULT_SOURCE = 'Default';
	
	static $sources = array();
	static $default = null;
	
	/**
	 * Retrieve a named data source.
	 *
	 * @param string $name
	 * @return PdoDataSource
	 */
	static function getSource($name) {
		if(isset(self::$sources[$name]))
			return self::$sources[$name];
		else
			return null;
	}
	
	/**
	 * Add a named datasource.
	 *
	 * @param string $name
	 * @param PdoDataSource $source
	 */
	static function addSource($name, PdoDataSource $source) {
		self::$sources[$name] = $source;
	}
	
	/**
	 * Get all named data sources.
	 *
	 * @return array of PdoDataSource
	 */
	static function getSources() {
		return self::$sources;
	}
	
	/**
	 * Set the default data source
	 *
	 * @param PdoDataSource $source
	 */
	static function setDefaultSource(PdoDataSource $source) {
		self::$sources[self::DEFAULT_SOURCE] = $source;
	}
	
	/**
	 * Retrieve the default data source
	 *
	 * @return PdoDataSource
	 */
	static function getDefaultSource() {
		return self::$sources[self::DEFAULT_SOURCE];
	}
	
}

?>