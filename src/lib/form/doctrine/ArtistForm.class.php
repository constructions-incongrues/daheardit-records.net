<?php

/**
 * Artist form.
 *
 * @package    daheardit-records.net
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ArtistForm extends BaseArtistForm
{
  public function configure()
  {
  	$this->embedI18n(array('fr', 'en'));
  }
}
