<?php
namespace Uj\Poed\Entity;

class Project extends AbstractEntity
{
	/**
	 * @var string
	 */
	protected $id = null;

	/**
	 * @var string
	 */
	protected $name = null;

	/**
	 * @var string
	 */
	protected $public = null;

	/**
	 * @var string
	 */
	protected $created = null;

	/**
	 * @return string $id
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param string $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return string $name
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return string $public
	 */
	public function getPublic()
	{
		return $this->public;
	}

	/**
	 * @param string $public
	 */
	public function setPublic($public)
	{
		$this->public = $public;
	}

	/**
	 * @return string $created
	 */
	public function getCreated()
	{
		return $this->created;
	}

	/**
	 * @param string $created
	 */
	public function setCreated($created)
	{
		$this->created = $created;
	}
}
