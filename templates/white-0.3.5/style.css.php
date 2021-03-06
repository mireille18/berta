<?php

header("Content-Type: text/css");

$SITE_ROOT = '../../';
$IS_CSS_FILE = true;
include('../../engine/inc.page.php');
$s =& $berta->template->settings;
$isEngineView = $berta->security->userLoggedIn;


if(!1) { ?><style type="text/css"><?php } ?>


html, body {
	width: 100%;
	height: 100%;
}
.ie6 html {
	overflow-y: hidden;
}



body {
	background-color: #fff;
	color: <?php echo $s->get('generalFontSettings', 'color') ?>;
	font-family: <?php echo $s->getFont('generalFontSettings') ?>;
	font-size: <?php echo $s->get('generalFontSettings', 'fontSize') ?>;
	font-weight: <?php echo $s->get('generalFontSettings', 'fontWeight') ?>;
	font-style: <?php echo $s->get('generalFontSettings', 'fontStyle') ?>;
	font-variant: <?php echo $s->get('generalFontSettings', 'fontVariant') ?>;
	line-height: <?php echo $s->get('generalFontSettings', 'lineHeight') ?>;

	background-color: <?php echo $s->get('background', 'backgroundColor') ?>;
	<?php if($s->get('background', 'backgroundImageEnabled') == 'yes') { ?>
		<?php if($s->get('background', 'backgroundImage')) { ?>
			background-image:url(<?php echo Berta::$options['MEDIA_ABS_ROOT'] . $s->get('background', 'backgroundImage') ?>);
		<?php } ?>
		background-repeat: <?php echo $s->get('background', 'backgroundRepeat') ?>;
		background-position: <?php echo $s->get('background', 'backgroundPosition') ?>;
		background-attachment: <?php echo $s->get('background', 'backgroundAttachment') ?>;
	<?php } ?>

	text-align: left;

}
.ie6 {
	overflow-y: hidden;
}

a:link {
	color: <?php echo $s->get('links', 'colorLink') ?>;
	text-decoration: <?php echo $s->get('links', 'textDecorationLink') ?>;
	/*border: <?php echo $s->get('links', 'border:link') ?>;*/
}
a:visited {
	color: <?php echo $s->get('links', 'colorVisited') ?>;
	text-decoration: <?php echo $s->get('links', 'textDecorationVisited') ?>;
	/*border: <?php echo $s->get('links', 'border:visited') ?>;*/
}
a:hover {
	color: <?php echo $s->get('links', 'colorHover') ?>;
	text-decoration: <?php echo $s->get('links', 'textDecorationHover') ?>;
	/*border: <?php echo $s->get('links', 'border:hover') ?>;*/
}
a:active {
	color: <?php echo $s->get('links', 'colorActive') ?>;
	text-decoration: <?php echo $s->get('links', 'textDecorationActive') ?>;
	/*border: <?php echo $s->get('links', 'border:active') ?>;*/
}

a img { border: none; }








#allContainer {
	position: relative;
	margin: 0;
	padding: 0;
}
	#allContainer.xCentered {
		margin: 0 auto;
		width: <?php echo $s->get('pageLayout', 'leftColumnWidth') + $s->get('pageLayout', 'contentWidth') + $s->get('pageLayout', 'paddingLeft') ?>px;
	}
.ie6 #allContainer {
	width: 100%;
	height: 100%;
	overflow-x: auto;
}


	#sideColumn {
		position: fixed;
		z-index: 2000;
		width: <?php echo $s->get('pageLayout', 'leftColumnWidth') ?>;
		top: 0; bottom: 0;
		left: 25px;
		background-color: #fff;
	}
		#sideColumn.xCentered {
			left: 50%;
			margin-left: -<?php echo ($s->get('pageLayout', 'leftColumnWidth') + $s->get('pageLayout', 'contentWidth') + $s->get('pageLayout', 'paddingLeft')) / 2 ?>px;
		}
	.ie6 #sideColumn {
		position: absolute;
		height: 100%;
	}

		#sideColumnTop {
			padding: 30px 20px 20px;
			/*width: 140px;*/
		}

			#sideColumnTop h1 {
				min-height: 40px;
				float: none;
				padding: 0;
				margin: 0;
				color: <?php echo $s->get('pageHeading', 'color') ?>;
				font-family: <?php echo $s->getFont('pageHeading') ?>;
				font-size: <?php echo $s->get('pageHeading', 'fontSize') ?>;
				font-weight: <?php echo $s->get('pageHeading', 'fontWeight') ?>;
				font-style: <?php echo $s->get('pageHeading', 'fontStyle') ?>;
				font-variant: <?php echo $s->get('pageHeading', 'fontVariant') ?>;
				line-height: <?php echo $s->get('pageHeading', 'lineHeight') ?>;

				margin-top: <?php echo $s->get('pageHeading', 'marginTop') ?>;
				margin-bottom: <?php echo $s->get('pageHeading', 'marginBottom') ?>;
			}
				#sideColumnTop h1 a {
					color: <?php echo $s->get('pageHeading', 'color') ?> !important;
					text-decoration: none;
				}

			#sideColumnTop a:link, #sideColumnTop a:visited {
				color: <?php echo $s->get('menu', 'colorLink') ?>;
				text-decoration: <?php echo $s->get('menu', 'textDecorationLink') ?>;
			}
			#sideColumnTop a:hover {
				color: <?php echo $s->get('menu', 'colorHover') ?>;
				text-decoration: <?php echo $s->get('menu', 'textDecorationHover') ?>;
				/*border: <?php echo $s->get('links', 'border:hover') ?>;*/
			}
			#sideColumnTop a:active, #sideColumnTop li.selected>a, #sideColumnTop li.selected>span {
				color: <?php echo $s->get('menu', 'colorActive') ?>;
				text-decoration: <?php echo $s->get('menu', 'textDecorationActive') ?>;
				/*border: <?php echo $s->get('links', 'border:active') ?>;*/
			}


			#sideColumnTop ul {
				list-style: none;
				margin: 0 0 20px;
				padding: 0;
			}
				#sideColumnTop ul li {
					padding-bottom: 6px;
					font-weight: bold;
				}
					#sideColumnTop ul li.selected>a {
						/*font-weight: bold;
						color: #000;*/
					}
				#sideColumnTop ul ul {
					margin: 0 0 0 10px;
				}
					#sideColumnTop ul ul li {
						padding-bottom: 0;
						font-weight: normal;
						text-transform: none;
					}

		#additionalText {
			position: absolute;
			min-width: 140px;
		}


		#sideColumnBottom {
			position: absolute;
			bottom: 0;
			width: 140px;
			padding: 20px 20px 30px;
		}
			#sideColumnBottom p {
				width: 100%;
				font-size: 10px;
				margin: 0;
				padding: 0;
			}
			#sideColumnBottom #userCopyright {

			}
			#sideColumnBottom #bertaCopyright {

			}



	#contentContainer {
		position: relative;
		z-index: 1000;
	}
		#allContainer.xCentered #contentContainer {
			width: 100%;
		}
	.ie6 #contentContainer {
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		overflow: auto !important;
	}

		#mainColumn {
			position: relative;
			padding-top: <?php echo $s->get('pageLayout', 'paddingTop') ?>;
			margin-left: <?php echo $s->get('pageLayout', 'leftColumnWidth') ?>;
			padding-bottom: 20px;
			padding-left: <?php echo $s->get('pageLayout', 'paddingLeft') ?>;
			/*width: 800px;*/
			width: <?php echo $s->get('pageLayout', 'contentWidth') ?>;
		}
			#mainColumn.xCentered {
				left: 50%;
				margin-left: -<?php echo ($s->get('pageLayout', 'leftColumnWidth') + $s->get('pageLayout', 'contentWidth') + $s->get('pageLayout', 'paddingLeft')) / 2 - $s->get('pageLayout', 'leftColumnWidth') ?>px;
			}


		ol#pageEntries {
			position: relative;
			margin: 0;
			padding: 0;
			list-style: none;
		}
			ol#pageEntries li.xEntry {
				position: relative;
				clear: both;
				list-style:none;
				margin-bottom: <?php echo $s->get('entryLayout', 'spaceBetween') ?>;
				padding: 0;
			}

				ol#pageEntries li.xEntry h2 {
					padding: 0;
					margin: 0;
					font-size: 16px;
					font-weight: bold;
				}
				ol#pageEntries li.xEntry .xGalleryContainer {
					position: relative;
					clear: both;
					padding: 0;
					margin-bottom: <?php echo $s->get('entryLayout', 'galleryMargin') ?>;
				}
				ol#pageEntries li.xEntry .xGalleryType-slideshow {

				}
				ol#pageEntries li.xEntry .xGalleryType-row {

				}
                ol#pageEntries li.xEntry .xGalleryType-pile {

                }
                ol#pageEntries li.xEntry .xGalleryType-column {

                }

					ol#pageEntries li.xEntry .xGalleryContainer .xGallery {
						position: relative;
					}
					ol#pageEntries li.xEntry .xGalleryType-slideshow .xGallery {
						margin-bottom: <?php echo $s->get('entryLayout', 'galleryNavMargin') ?>;
					}

						ol#pageEntries li.xEntry .xGalleryContainer .xGallery div.xGalleryItem { display: block; }
						ol#pageEntries li.xEntry .xGalleryType-column div.xGalleryItem {
							padding-bottom: <?php echo $s->get('entryLayout', 'spaceBetweenImages') ?>;
						}
                        ol#pageEntries li.xEntry .xGalleryType-row div.xGalleryItem {
                            position: relative;
                            float: left;
                            padding-right: <?php echo $s->get('entryLayout', 'spaceBetweenImages') ?>;
                        }
						ol#pageEntries li.xEntry .xGalleryType-slideshow .xGalleryImageCaption { display: none; }

					ol#pageEntries .xGalleryContainer ul.xGalleryNav {
						display: block;
						position: relative;
						clear: both;
						margin: 0 0 2px;
						padding: 0;
						list-style: none;
						height: 18px;
					}
						ol#pageEntries .xGalleryContainer ul.xGalleryNav li {
							display: block;
							float: left;
							list-style: none;
							line-height: 96%;
							margin: 0;
						}
						ol#pageEntries .xGalleryContainer ul.xGalleryNav li .xGalleryImageCaption { display: none; }
						ol#pageEntries .xGalleryContainer ul.xGalleryNav li a {
							display: block;
							float: left;
							padding: 1px 5px 1px;
							color: <?php echo $s->get('menu', 'colorLink') ?>;
							text-decoration: <?php echo $s->get('menu', 'textDecorationLink') ?>;
							outline: none;
						}
						ol#pageEntries .xGalleryContainer ul.xGalleryNav li a:hover {
							color: <?php echo $s->get('menu', 'colorHover') ?>;
							text-decoration: <?php echo $s->get('menu', 'textDecorationHover') ?>;
						}
						ol#pageEntries .xGalleryContainer ul.xGalleryNav li.selected a {
							color: <?php echo $s->get('menu', 'colorActive') ?>;
							text-decoration: <?php echo $s->get('menu', 'textDecorationActive') ?>;
						}


				ol#pageEntries li.xEntry .entryText {
					position: relative;
					clear: both;
					margin: 0 0 6px;
				}
					ol#pageEntries li.xEntry .entryText p {
						margin: 0 0 6px;
					}

					/* disqus fix */
					ol#pageEntries #dsq-content ul, ol#pageEntries #dsq-content li {
					    list-style-position: outside;
					    list-style-type: none;
					    margin: 0;
					    padding: 0;
					}

					ol#pageEntries li.xEntry .entryText ul {
						margin: 0 0 6px;
						padding: 0 0 0 15px;
					}
						ol#pageEntries li.xEntry .entryText ul li {
							list-style-type: circle;
							margin: 0 0 3px 0;
							padding: 0;
						}
					ol#pageEntries li.xEntry .entryText ol {
						margin: 0 0 6px;
						padding: 0 0 0 15px;
					}
						ol#pageEntries li.xEntry .entryText ol li {
							margin: 0 0 3px 0;
							padding: 0;
							list-style-type: decimal;
						}


				ol#pageEntries li.xEntry .entryTags {
					position: relative;
					clear: both;
				}



				.floating-banner {
					position: absolute;
					z-index: 3000;
				}









<?php if(!1) { ?></style><?php } ?>