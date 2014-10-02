<?php
namespace TRB\TrbPiTeam2\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 Boris Günther <info@boris-guenther.de>, Boris Günther
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * User
 */
class User extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUser {

	/**
	 * nationality
	 * @var \SJBR\StaticInfoTables\Domain\Model\Country
	 */
	protected $nationality			= NULL;

	/**
	 * birthday
	 * @var \DateTime
	 */
	protected $birthday				= NULL;

	/**
	 * age
	 * @var int
	 */
	protected $age					= NULL;

	/**
	 * slogan
	 * @var string
	 */
	protected $slogan				= NULL;

	/**
	 * description
	 * @var string
	 */
	protected $description			= NULL;

	/**
	 * mobile
	 * @var string
	 */
	protected $mobile				= NULL;

	/**
	 * skype
	 * @var string
	 */
	protected $skype				= NULL;

	/**
	 * facebook
	 * @var string
	 */
	protected $facebook				= NULL;

	/**
	 * googleplus
	 * @var string
	 */
	protected $googleplus			= NULL;

	/**
	 * linkedin
	 * @var string
	 */
	protected $linkedin				= NULL;

	/**
	 * xing
	 * @var string
	 */
	protected $xing					= NULL;

	/**
	 * twitter
	 * @var string
	 */
	protected $twitter				= NULL;

	/**
	 * size
	 * @var float
	 */
	protected $size					= NULL;

	/**
	 * weight
	 * @var float
	 */
	protected $weight				= NULL;

	/**
	 * shape
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
	 */
	protected $shape				= NULL;

	/**
	 * breast
	 * @var string
	 */
	protected $breast				= NULL;

	/**
	 * measurements
	 * @var string
	 */
	protected $measurements			= NULL;

	/**
	 * eye_color
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
	 */
	protected $eye_color			= NULL;

	/**
	 * hair_color
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
	 */
	protected $hair_color			= NULL;

	/**
	 * haircut
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
	 */
	protected $haircut				= NULL;

	/**
	 * image_profile
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
	 */
	protected $image_profile		= NULL;

	/**
	 * image_gallery
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
	 */
	protected $image_gallery		= NULL;

	/**
	 * categories_like
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
	 */
	protected $categories_like		= NULL;

	/**
	 * categories_dislike
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
	 */
	protected $categories_dislike	= NULL;

	/**
	 * categories_other
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
	 */
	protected $categories_other		= NULL;

	/**
	 * (non-PHPdoc)
	 *
	 * @author Boris
	 * @since 17.08.2014
	 *
	 * @see \TYPO3\CMS\Extbase\DomainObject\AbstractDomainObject::_setProperty()
	 */
	public function _setProperty($propertyName, $propertyValue) {
		//Set property
		$result	= parent::_setProperty($propertyName, $propertyValue);

		//Update class
		if($propertyName == 'birthday' && !is_null($propertyValue)) {
			$now			= new \DateTime();
			$oDateIntervall	= $now->diff($propertyValue);
			$this->age		= $oDateIntervall->y;
		}

		//Deliver
		return $result;
	}



	/**
	 * Returns the nationality
	 *
	 * @return \SJBR\StaticInfoTables\Domain\Model\Country $nationality
	 */
	public function getNationality() {
		return $this->nationality;
	}

	/**
	 * Returns the birthday
	 *
	 * @return \DateTime $birthday
	 */
	public function getBirthday() {
		return $this->birthday;
	}

	/**
	 * Returns the age
	 *
	 * @return int $age
	 */
	public function getAge() {
		return $this->age;
	}

	/**
	 * Returns the slogan
	 *
	 * @return string $slogan
	 */
	public function getSlogan() {
		return $this->slogan;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Returns the mobile
	 *
	 * @return string $mobile
	 */
	public function getMobile() {
		return $this->mobile;
	}

	/**
	 * Returns the skype
	 *
	 * @return string $skype
	 */
	public function getSkype() {
		return $this->skype;
	}

	/**
	 * Returns the facebook
	 *
	 * @return string $facebook
	 */
	public function getFacebook() {
		return $this->facebook;
	}

	/**
	 * Returns the googleplus
	 *
	 * @return string $googleplus
	 */
	public function getGoogleplus() {
		return $this->googleplus;
	}

	/**
	 * Returns the linkedin
	 *
	 * @return string $linkedin
	 */
	public function getLinkedin() {
		return $this->linkedin;
	}

	/**
	 * Returns the xing
	 *
	 * @return string $xing
	 */
	public function getXing() {
		return $this->xing;
	}

	/**
	 * Returns the twitter
	 *
	 * @return string $twitter
	 */
	public function getTwitter() {
		return $this->twitter;
	}

	/**
	 * Returns the size
	 *
	 * @return float $size
	 */
	public function getSize() {
		return $this->size;
	}

	/**
	 * Returns the weight
	 *
	 * @return float $weight
	 */
	public function getWeight() {
		return $this->weight;
	}

	/**
	 * Returns the shape
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category> $shape
	 */
	public function getShape() {
		return $this->shape;
	}

	/**
	 * Returns the breast
	 *
	 * @return string $breast
	 */
	public function getBreast() {
		return $this->breast;
	}

	/**
	 * Returns the measurements
	 *
	 * @return string $measurements
	 */
	public function getMeasurements() {
		return $this->measurements;
	}

	/**
	 * Returns the eyeColor
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category> $shape
	 */
	public function getEye_color() {
		return $this->eye_color;
	}

	/**
	 * Returns the hairColor
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category> $shape
	 */
	public function getHair_color() {
		return $this->hair_color;
	}

	/**
	 * Returns the haircut
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category> $shape
	 */
	public function getHaircut() {
		return $this->haircut;
	}

	/**
	 * Returns the imageProfile
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $imageProfile
	 */
	public function getImage_profile() {
		return $this->image_profile;
	}

	/**
	 * Returns the imageGallery
	 *
	 * @return string $imageGallery
	 */
	public function getImage_gallery() {
		return $this->image_gallery;
	}

	/**
	 * Returns the categoriesLike
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category> $shape
	 */
	public function getCategories_like() {
		return $this->categories_like;
	}

	/**
	 * Returns the categoriesDislike
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category> $shape
	 */
	public function getCategories_dislike() {
		return $this->categories_dislike;
	}

	/**
	 * Returns the categoriesOther
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category> $shape
	 */
	public function getCategories_other() {
		return $this->categories_other;
	}

}