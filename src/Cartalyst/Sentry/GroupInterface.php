<?php namespace Cartalyst\Sentry;
/**
 * Part of the Sentry Package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Sentry
 * @version    2.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2013, Cartalyst LLC
 * @link       http://cartalyst.com
 */

interface GroupInterface
{
	/**
	 * Find group by id
	 *
	 * @param   integer  $id
	 * @return  Cartalyst\Sentry\GroupInterface or false
	 */
	public function findById($id);

	/**
	 * Find group by name
	 *
	 * @param   string  $name
	 * @return  Cartalyst\Sentry\GroupInterface or false
	 */
	public function findByName($login);
}