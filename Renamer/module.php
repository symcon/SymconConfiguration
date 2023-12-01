<?php

declare(strict_types=1);

class Renamer extends IPSModule
{
    public function Create()
    {
        //Never delete this line!
        parent::Create();

        $this->RegisterPropertyInteger('SourceVariable', 0);
        $this->RegisterPropertyString('Objects', '[]');
    }

    public function ApplyChanges()
    {
        //Never delete this line!
        parent::ApplyChanges();

        //Register variables from list
        $objects = json_decode($this->ReadPropertyString('Objects'), true);
        for ($i = 0; $i < count($objects); $i++) {
            $objectID = $objects[$i]['ObjectID'];
            $this->RegisterVariableString($objectID, IPS_GetLocation($objectID), '', 0);
            $this->EnableAction($objectID);
            $this->SetValue($objectID, IPS_GetName($objects[$i]['ObjectID']));
        }

        $childrenIDs = IPS_GetChildrenIDs($this->InstanceID);
        $childInObjects = function ($childIdent) use ($objects)
        {
            foreach ($objects as $object) {
                if ($object['ObjectID'] == $childIdent) {
                    return true;
                }
            }
            return false;
        };

        //Remove objects not present in list
        foreach ($childrenIDs as $childID) {
            $childIdent = IPS_GetObject($childID)['ObjectIdent'];
            if (!$childInObjects($childIdent)) {
                $this->UnregisterVariable($childIdent);
            }
        }
    }

    public function RequestAction($Ident, $Value)
    {
        preg_match('/[0-9]{5}/m', $Ident, $matches);
        if ($matches) {
            $objects = json_decode($this->ReadPropertyString('Objects'), true);
            IPS_SetName($Ident, $Value);
            IPS_SetName($this->GetIDForIdent($Ident), IPS_GetLocation($Ident));
            $this->SetValue($Ident, $Value);
        }
    }
}
