<?php
/**
 *
**/

namespace FishPig\WordPress\Controller\Term;
 
class View extends \FishPig\WordPress\Controller\Action
{   
	/**
	 * @var 
	**/
    protected function _getEntity()
    {
	    $object = $this->_factory->getFactory('Term')->create()->load($this->_request->getParam('id'));

		return $object->getId() ? $object : false;
    }
    
    /**
	  * Get the blog breadcrumbs
	  *
	  * @return array
	 **/
    protected function _getBreadcrumbs()
    {
	    return array_merge(	
		    parent::_getBreadcrumbs(), [
			'archives' => [
				'label' => __($this->_getEntity()->getName()),
				'title' => __($this->_getEntity()->getName())
			]]
		);
    }
}
