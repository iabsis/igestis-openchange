<?php
/**
 * This class will permitt to set all global variables of the module
 * @Author : Gilles Hemmerlé <gilles.h@iabsis.com>
 */

namespace Igestis\Modules\OpenChange;

define("IGESTIS_OPENCHANGE_VERSION", "0.1-1");
define("IGESTIS_OPENCHANGE_MODULE_NAME", "OpenChange");
define("IGESTIS_OPENCHANGE_TEXTDOMAIN", IGESTIS_OPENCHANGE_MODULE_NAME .  IGESTIS_OPENCHANGE_VERSION);
/**
 * Configuration of the module
 *
 * @author Gilles Hemmerlé
 */
class ConfigModuleVars {

    /**
     * @var String Numéro de version du module
     */
    const version = IGESTIS_OPENCHANGE_VERSION;
    /**
     *
     * @var String Name of the module (used only on the source code) 
     */
    const moduleName = IGESTIS_OPENCHANGE_MODULE_NAME;
    
    /**
     *
     * @var String Name of the menu showed to the user (blank if it is a simple service)
     */
    const moduleShowedName = "OpenChange";
    
    /**
     *
     * @var String textdomain used for this module
     */
    const textDomain = IGESTIS_OPENCHANGE_TEXTDOMAIN;
    
    /**
     * 
     * @var Server hostname of the file server
     */
    const serverName = "SERVER";
    
    /**
     * 
     * @var Postmaster is the postmaster of the OpenChange server email
     */
    const postMaster = "postmaster@domain.local";
    
}
