<?php
namespace Producto\Controller;

 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;
 use Zend\View\Model\JsonModel;
 use Producto\Producto\Document\Producto;


 class ProductoController extends AbstractActionController
 {
      
    

    public function indexAction(){
    

    }


     public function getListAction()
     {
        $dm = $this->getServiceLocator()->get('doctrine.documentmanager.odm_default');
       
     
         $users = $dm->createQueryBuilder('Producto\Producto\Document\Producto')
        ->hydrate(false)
        ->getResult(Query::HYDRATE_DOCUMENT)
        ->getQuery()
        ->execute();

        $qb = // create a new query builder instance
        $qb->where($qb->expr()->eq('foo', 'bar'));
        $query = $qb->getQuery(); // return a new Query object
        $results = $query->getResult(); // get the results of the query

        //$users->getResult(Query::HYDRATE_DOCUMENT);
     

        $json = \Zend\Json\Json::encode($array = array('Producto' => $users));
   
         $array =  array(
            'Producto' => $json
         );

         var_dump($users);
        return $array;//setContent(\Zend\Json\Json::encode(array($result)));
     }

     public function editAction()
     {

     }

     public function addAction()
     {

        //$producto = new Producto();
        //  $producto->setTitulo('Titulo');

       // $producto->setDescripcion('Descripcion');

        //$dm->persist($producto);

        //$dm->flush();

      /*  $request = $this->getRequest();
        $response = $this->getResponse();
        if ($request->isPost()) {
            $new_note = new \StickyNotes\Model\Entity\Album();
            if (!$note_id = $this->getStickyNotesTable()->saveStickyNote($new_note))
                $response->setContent(\Zend\Json\Json::encode(array('response' => false)));
            else {
                $response->setContent(\Zend\Json\Json::encode(array('response' => true, 'new_note_id' => $note_id)));
            }
        }
        return $response;*/


     }

     public function deleteAction()
     {

     }

   

 }

