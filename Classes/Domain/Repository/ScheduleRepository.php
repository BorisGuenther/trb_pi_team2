<?php
namespace TRB\TrbPiTeam2\Domain\Repository;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014
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
 * The repository for Schedules
 */
class ScheduleRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	/**
	 * Returns all objects of within given range
	 *
	 * @author Boris
	 * @since 26.08.2014
	 *
	 * @param \DateTime $start
	 * @param \DateTime $end
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface|array
	 * @api
	 */
	public function findByRange(\DateTime $start, \DateTime $end) {
		//Prepare Query
		$query	= $this->createQuery();

		//Setup sorting
		$orderings	= 	array(
				'start' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
				'end' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING,

		);
		$query->setOrderings($orderings);

		//Append conditions
		$query->matching(
				$query->logicalAnd(
						$query->greaterThanOrEqual('end', $start->format('Y-m-d')),
						$query->lessThanOrEqual('end', $end->format('Y-m-d'))
				)
		);

		//Deliver
		return $query->execute();
	}

}