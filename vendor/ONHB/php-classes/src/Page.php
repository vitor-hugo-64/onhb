<?php

	namespace ONHB;

	use Rain\Tpl;

	class Page
	{
		private $config;
		
		function __construct()
		{
		    $config = array( "tpl_dir" => "views/", "cache_dir" => "views-cache/");
		    Tpl::configure( $config );			
		}

		function drawPage( $pages = array(null), $parameters = array(null))
		{
			$tpl = new Tpl();
			
			foreach ($parameters as $key => $value) {
				$tpl->assign( $key, $value);
			}

			foreach ($pages as $value) {
				$tpl->draw($value);
			}			
		}
	}