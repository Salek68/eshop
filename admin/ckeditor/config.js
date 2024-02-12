/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */
 
 CKEDITOR.editorConfig=function(config){
	 
	 config.width=750,
	 config.height=400,
	 config.uiColor='#000f00',
	 config.language='fa',
	 config.toolbarLocation='top',
	 config.startupFocus=false,
	 config.smiley_path='/ckeditor/ckeditor/images/',
	 config.smiley_images=['sheklak.jpg'],
	 config.font_names='Arial;Tahoma;Titr;Zar',
	 config.fontSize_sizes='8/8px;9/9px;10/10px',
	 config.font_defaultLabel='Zar',
	 config.toolbarCanCollapse=true,
	 config.resize_enabled=true,
	 config.resize_dir='vertical',
	 config.undoStackSize=100,
	 config.resize_maxHeight=400,
	 config.filebrowserBrowseUrl="ckeditor/ckfinder/ckfinder.html";
config.filebrowserImageBrowseUrl="ckeditor/ckfinder/ckfinder.html?type=Images";
config.filebrowserFlashBrowseUrl="ckeditor/ckfinder/ckfinder.html?type=Flash";
config.filebrowserUploadUrl="ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files";
config.filebrowserImageUploadUrl="ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images";
config.filebrowserFlashUploadUrl="ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash";

	 
	 }

