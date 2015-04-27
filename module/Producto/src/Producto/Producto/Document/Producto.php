<?php

namespace Producto\Producto\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Producto\Document\Producto
 *
 * @ODM\Document
 * @ODM\ChangeTrackingPolicy("DEFERRED_IMPLICIT")
 */
class Producto
{
    /**
     * @var $id
     *
     * @ODM\Id(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $titulo
     *
     * @ODM\Field(name="titulo", type="string", options={})
     */
    protected $titulo;

    /**
     * @var string $descripcion
     *
     * @ODM\Field(name="descripcion", type="string", options={})
     */
    protected $descripcion;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
        return $this;
    }

    /**
     * Get titulo
     *
     * @return string $titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string $descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}