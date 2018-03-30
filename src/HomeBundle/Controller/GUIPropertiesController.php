<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class GUIPropertiesController extends Controller {

    public function GUIPropertiesAction() {
        return $this->render('@Home/home/form/GUIProperties.html.twig');
    }

    public function getStoredFieldAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
//
        $sessionId = $_POST['sessionId'];
        $fieldName = $_POST['fieldName'];

//        fieldName

        if ($request->isXMLHttpRequest()) {

            $user = $em->getRepository('HomeBundle:User')->findOneByUserId($sessionId);


            $field = $em->createQuery(
                "SELECT f.fieldId, f.fieldName, f.fieldStatus, u.userId 
                FROM HomeBundle:Field f 
                JOIN HomeBundle:User u 
                WITH u.userId = f.user 
                WHERE u.userId = '$sessionId' and f.fieldName = '$fieldName'"
            );
            
            $fields = $field->getResult();

            if ($fields) {
                $fieldId_Value = $fields[0]['fieldId'];
                $fieldName_Value = $fields[0]['fieldName'];
                $fieldStatus_Value = $fields[0]['fieldStatus'];
            } else {
                $fieldId_Value = "_";
                $fieldName_Value = "_";
                $fieldStatus_Value = "_";
            }

            $sendData[0] = array(
                'fieldId' => $fieldId_Value,
                'fieldName' => $fieldName_Value,
                'fieldStatus' => $fieldStatus_Value
            );

            return new Response(json_encode($sendData), 200, array('Content-Type' => 'application/json'));
        }
    }

    public function getStoredLayoutAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
//
        $sessionId = $_POST['sessionId'];
        $fieldName = $_POST['fieldName'];

//        fieldName

        if ($request->isXMLHttpRequest()) {

            $user = $em->getRepository('HomeBundle:User')->findOneByUserId($sessionId);

            $layout = $em->createQuery(
                "SELECT l.layoutId, l.layoutBackgroundcolor, l.layoutOpacity, l.layoutWidth, l.layoutHeight, u.userId 
                FROM HomeBundle:Layout l 
                JOIN HomeBundle:User u 
                WITH u.userId = l.user 
                JOIN HomeBundle:Field f 
                WITH u.userId = f.user 
                WHERE u.userId = '$sessionId'"
            );

            $layouts = $layout->getResult();

            if ($layouts) {
                $layoutId_Value = $layouts[0]['layoutId'];
                $layoutBackgroundcolor_Value = $layouts[0]['layoutBackgroundcolor'];
                $layoutOpacity_Value = $layouts[0]['layoutOpacity'];
                $layoutWidth_Value = $layouts[0]['layoutWidth'];
                $layoutHeight_Value = $layouts[0]['layoutHeight'];
            } else {
                $layoutId_Value = "_";
                $layoutBackgroundcolor_Value = "_";
                $layoutOpacity_Value = "_";
                $layoutWidth_Value = "_";
                $layoutHeight_Value = "_";
            }

            $sendData[0] = array(
                'layoutId' => $layoutId_Value,
                'layoutBackgroundcolor' => $layoutBackgroundcolor_Value,
                'layoutOpacity' => $layoutOpacity_Value,
                'layoutWidth' => $layoutWidth_Value,
                'layoutHeight' => $layoutHeight_Value
            );

            return new Response(json_encode($sendData), 200, array('Content-Type' => 'application/json'));
        }
    }

    public function setThisFieldAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
//
        $sessionId = $_POST['sessionId'];
        $fieldName = $_POST['fieldName'];


//        fieldName

        if ($request->isXMLHttpRequest()) {

            $user = $em->getRepository('HomeBundle:User')->findOneByUserId($sessionId);


            $field = $em->createQuery(
                    "SELECT f.fieldId, f.fieldName, f.fieldStatus, u.userId 
                FROM HomeBundle:Field f 
                JOIN HomeBundle:User u 
                WHERE u.userId = '$sessionId' and f.fieldName = '$fieldName'"
            );

            $fields = $field->getResult();

            $fieldId_Value = $fields[0]['fieldId'];
            $fieldName_Value = $fields[0]['fieldName'];
            $fieldStatus_Value = $fields[0]['fieldStatus'];

            $sendData[0] = array(
                'fieldId' => $fieldId_Value,
                'fieldName' => $fieldName_Value,
                'fieldStatus' => $fieldStatus_Value
            );

            return new Response(json_encode($sendData), 200, array('Content-Type' => 'application/json'));
        }
    }

    public function setThisLayoutAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
//
        $sessionId = $_POST['sessionId'];
        $fieldName = $_POST['fieldName'];


//        fieldName

        if ($request->isXMLHttpRequest()) {

            $user = $em->getRepository('HomeBundle:User')->findOneByUserId($sessionId);


            $field = $em->createQuery(
                    "SELECT f.fieldId, f.fieldName, f.fieldStatus, u.userId 
                FROM HomeBundle:Field f 
                JOIN HomeBundle:User u 
                WHERE u.userId = '$sessionId' and f.fieldName = '$fieldName'"
            );

            $fields = $field->getResult();

            $fieldId_Value = $fields[0]['fieldId'];
            $fieldName_Value = $fields[0]['fieldName'];
            $fieldStatus_Value = $fields[0]['fieldStatus'];

            $sendData[0] = array(
                'fieldId' => $fieldId_Value,
                'fieldName' => $fieldName_Value,
                'fieldStatus' => $fieldStatus_Value
            );

            return new Response(json_encode($sendData), 200, array('Content-Type' => 'application/json'));
        }
    }

    public function deleteStoredFieldAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
//
        $sessionId = $_POST['sessionId'];
        $fieldName = $_POST['fieldName'];


//        fieldName

        if ($request->isXMLHttpRequest()) {

            $user = $em->getRepository('HomeBundle:User')->findOneByUserId($sessionId);


            $field = $em->createQuery(
                    "SELECT f.fieldId, f.fieldName, f.fieldStatus, u.userId 
                FROM HomeBundle:Field f 
                JOIN HomeBundle:User u 
                WHERE u.userId = '$sessionId' and f.fieldName = '$fieldName'"
            );

            $fields = $field->getResult();

            $fieldId_Value = $fields[0]['fieldId'];
            $fieldName_Value = $fields[0]['fieldName'];
            $fieldStatus_Value = $fields[0]['fieldStatus'];

            $sendData[0] = array(
                'fieldId' => $fieldId_Value,
                'fieldName' => $fieldName_Value,
                'fieldStatus' => $fieldStatus_Value
            );

            return new Response(json_encode($sendData), 200, array('Content-Type' => 'application/json'));
        }
    }

    public function deleteStoredLayoutAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
//
        $sessionId = $_POST['sessionId'];
        $fieldName = $_POST['fieldName'];


//        fieldName

        if ($request->isXMLHttpRequest()) {

            $user = $em->getRepository('HomeBundle:User')->findOneByUserId($sessionId);


            $field = $em->createQuery(
                    "SELECT f.fieldId, f.fieldName, f.fieldStatus, u.userId 
                FROM HomeBundle:Field f 
                JOIN HomeBundle:User u 
                WHERE u.userId = '$sessionId' and f.fieldName = '$fieldName'"
            );

            $fields = $field->getResult();

            $fieldId_Value = $fields[0]['fieldId'];
            $fieldName_Value = $fields[0]['fieldName'];
            $fieldStatus_Value = $fields[0]['fieldStatus'];

            $sendData[0] = array(
                'fieldId' => $fieldId_Value,
                'fieldName' => $fieldName_Value,
                'fieldStatus' => $fieldStatus_Value
            );

            return new Response(json_encode($sendData), 200, array('Content-Type' => 'application/json'));
        }
    }

}
