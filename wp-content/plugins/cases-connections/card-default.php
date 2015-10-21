<?php
/**
 * @package    Naww, Son
 * @subpackage Do It Do it DO IT
 * @author     Joe Cooper
 * @since      0.7.9
 * @license    GPL-2.0+
 * @link       http://connections-pro.com
 * @copyright  2014 CASES
 *
 * @wordpress-plugin
 * Plugin Name:       CASES 2K14
 * Plugin URI:        http://connections-pro.com
 * Description:       Brick
 * Version:           2.0.1
 * Author:            Joe Cooper
 * Author URI:        http://connections-pro.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( 'CN_Card_Template' ) ) {

	class CN_Card_Template {

		public static function register() {

			$atts = array(
				'class'       => 'CN_Card_Template',
				'name'        => 'CASES... 2014',
				'slug'        => 'cases',
				'type'        => 'all',
				'version'     => '1',
				'author'      => 'Joe Cooper',
				'authorURL'   => 'cases.org',
				'description' => 'This is the one we will use',
				'custom'      => FALSE,
				'path'        => plugin_dir_path( __FILE__ ),
				'url'         => plugin_dir_url( __FILE__ ),
				'thumbnail'   => 'thumbnail.png',
				'parts'       => array(),
				);

			cnTemplateFactory::register( $atts );
		}

		public function __construct( $template ) {

			$this->template = $template;

			$template->part( array( 'tag' => 'card', 'type' => 'action', 'callback' => array( __CLASS__, 'card' ) ) );
			$template->part( array( 'tag' => 'card-single', 'type' => 'action', 'callback' => array( __CLASS__, 'card' ) ) );
		}

		public static function card( $entry, $template, $atts ) {

			?>



			<div class="cn-entry" style="-moz-border-radius:4px; background-color:#FFFFFF; border-top:2px solid #002b55; color: #000000; margin:8px 0px; padding:6px; position: relative;">
				<div style="width:49%; float:right">
					<?php $entry->getImage(); ?>
					<div style="clear:both;"></div></div>
					<div style="margin-bottom: 10px;">
						<h4><?php echo $entry->getNameBlock(); ?></h4>
						<font color="#000000"><?php $entry->getTitleBlock(); ?></font><br>
						<font color="#000000"><?php $entry->getOrgUnitBlock(); ?></font><br>
						<?php $entry->getContactNameBlock(); ?>
					

						<font color="#000000"><?php $entry->getAddressBlock(); ?></font>
				</div>

				<div align="right">

					<?php $entry->getFamilyMemberBlock(); ?><br>
					<?php if ($entry->getPhoneNumbers())
{
	echo '<div class="phone-number-block" style="margin-bottom: 10px;">' . "\n";
	foreach ($entry->getPhoneNumbers() as $phone)
	{

		switch ($phone->type)
		{
			case 'homephone':
				$phone->name = "Phone";
				break;
			case 'homefax':
				$phone->name = "Fax";
				break;
			case 'cellphone':
				$phone->name = "Cell Phone";
				break;
			case 'workphone':
				$phone->name = "Phone";
				break;
			case 'workfax':
				$phone->name = "Fax";
				break;
			case 'fax':
				$phone->name = "Fax";
				break;
		}

		//Type for hCard compatibility. Hidden.
		if ($phone->number != null) echo  '<strong>' . $phone->name . ':</strong> <span class="tel">' . $entry->gethCardTelType($phone->type) . '<span class="value">' .  $phone->number . '</span></span><br />' . "\n";
	}
	echo '</div>' . "\n";
}
?>
					<?php $entry->getEmailAddressBlock(); ?><br>
					<?php $entry->getImBlock(); ?>
					<?php $entry->getSocialMediaBlock(); ?>
					<?php $entry->getLinkBlock(); ?>
					<?php $entry->getDateBlock(); ?>

				</div>

				<div style="clear:both"></div>
				<div class="cn-meta" align="left" style="margin-top: 6px">

					<?php $entry->getContentBlock( $atts['content'], $atts, $template ); ?>

					<div style="display: block; margin-bottom: 8px;"><?php /* $entry->getCategoryBlock( array( 'separator' => ', ', 'before' => '<span>', 'after' => '</span>' ) ); */ ?></div>

					<?php if ( cnSettingsAPI::get( 'connections', 'connections_display_entry_actions', 'vcard' ) ) $entry->vcard( array( 'before' => '<span>', 'after' => '</span>' ) ); ?>

					<?php
			
			/*

					cnTemplatePart::updated(
						array(
							'timestamp' => $entry->getUnixTimeStamp(),
							'style' => array(
								'font-size'    => 'x-small',
								'font-variant' => 'small-caps',
								'position'     => 'absolute',
								'right'        => '36px',
								'bottom'       => '8px',
							)
						)
					);
					*/

					cnTemplatePart::returnToTop( array( 'style' => array( 'position' => 'absolute', 'right' => '8px', 'bottom' => '5px' ) ) );

					?>

				</div>

			</div>

			<?php
		}

	}

	// Register the template.
	add_action( 'cn_register_template', array( 'CN_Card_Template', 'register' ) );
}
