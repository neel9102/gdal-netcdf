<?php

/* ----------------------------------------------------------------------------
 * This file was automatically generated by SWIG (http://www.swig.org).
 * Version 1.3.40
 * 
 * This file is not intended to be easily readable and contains a number of 
 * coding conventions designed to improve portability and efficiency. Do not make
 * changes to this file unless you know what you are doing--modify the SWIG 
 * interface file instead. 
 * ----------------------------------------------------------------------------- */

// Try to load our extension if it's not already loaded.
if (!extension_loaded('osr')) {
  if (strtolower(substr(PHP_OS, 0, 3)) === 'win') {
    if (!dl('php_osr.dll')) return;
  } else {
    // PHP_SHLIB_SUFFIX gives 'dylib' on MacOS X but modules are 'so'.
    if (PHP_SHLIB_SUFFIX === 'dylib') {
      if (!dl('osr.so')) return;
    } else {
      if (!dl('osr.'.PHP_SHLIB_SUFFIX)) return;
    }
  }
}



abstract class osr {
	const SRS_WKT_WGS84 = SRS_WKT_WGS84;

	const SRS_PT_ALBERS_CONIC_EQUAL_AREA = SRS_PT_ALBERS_CONIC_EQUAL_AREA;

	const SRS_PT_AZIMUTHAL_EQUIDISTANT = SRS_PT_AZIMUTHAL_EQUIDISTANT;

	const SRS_PT_CASSINI_SOLDNER = SRS_PT_CASSINI_SOLDNER;

	const SRS_PT_CYLINDRICAL_EQUAL_AREA = SRS_PT_CYLINDRICAL_EQUAL_AREA;

	const SRS_PT_BONNE = SRS_PT_BONNE;

	const SRS_PT_ECKERT_I = SRS_PT_ECKERT_I;

	const SRS_PT_ECKERT_II = SRS_PT_ECKERT_II;

	const SRS_PT_ECKERT_III = SRS_PT_ECKERT_III;

	const SRS_PT_ECKERT_IV = SRS_PT_ECKERT_IV;

	const SRS_PT_ECKERT_V = SRS_PT_ECKERT_V;

	const SRS_PT_ECKERT_VI = SRS_PT_ECKERT_VI;

	const SRS_PT_EQUIDISTANT_CONIC = SRS_PT_EQUIDISTANT_CONIC;

	const SRS_PT_EQUIRECTANGULAR = SRS_PT_EQUIRECTANGULAR;

	const SRS_PT_GALL_STEREOGRAPHIC = SRS_PT_GALL_STEREOGRAPHIC;

	const SRS_PT_GAUSSSCHREIBERTMERCATOR = SRS_PT_GAUSSSCHREIBERTMERCATOR;

	const SRS_PT_GEOSTATIONARY_SATELLITE = SRS_PT_GEOSTATIONARY_SATELLITE;

	const SRS_PT_GOODE_HOMOLOSINE = SRS_PT_GOODE_HOMOLOSINE;

	const SRS_PT_GNOMONIC = SRS_PT_GNOMONIC;

	const SRS_PT_HOTINE_OBLIQUE_MERCATOR = SRS_PT_HOTINE_OBLIQUE_MERCATOR;

	const SRS_PT_HOTINE_OBLIQUE_MERCATOR_TWO_POINT_NATURAL_ORIGIN = SRS_PT_HOTINE_OBLIQUE_MERCATOR_TWO_POINT_NATURAL_ORIGIN;

	const SRS_PT_LABORDE_OBLIQUE_MERCATOR = SRS_PT_LABORDE_OBLIQUE_MERCATOR;

	const SRS_PT_LAMBERT_CONFORMAL_CONIC_1SP = SRS_PT_LAMBERT_CONFORMAL_CONIC_1SP;

	const SRS_PT_LAMBERT_CONFORMAL_CONIC_2SP = SRS_PT_LAMBERT_CONFORMAL_CONIC_2SP;

	const SRS_PT_LAMBERT_CONFORMAL_CONIC_2SP_BELGIUM = SRS_PT_LAMBERT_CONFORMAL_CONIC_2SP_BELGIUM;

	const SRS_PT_LAMBERT_AZIMUTHAL_EQUAL_AREA = SRS_PT_LAMBERT_AZIMUTHAL_EQUAL_AREA;

	const SRS_PT_MERCATOR_1SP = SRS_PT_MERCATOR_1SP;

	const SRS_PT_MERCATOR_2SP = SRS_PT_MERCATOR_2SP;

	const SRS_PT_MILLER_CYLINDRICAL = SRS_PT_MILLER_CYLINDRICAL;

	const SRS_PT_MOLLWEIDE = SRS_PT_MOLLWEIDE;

	const SRS_PT_NEW_ZEALAND_MAP_GRID = SRS_PT_NEW_ZEALAND_MAP_GRID;

	const SRS_PT_OBLIQUE_STEREOGRAPHIC = SRS_PT_OBLIQUE_STEREOGRAPHIC;

	const SRS_PT_ORTHOGRAPHIC = SRS_PT_ORTHOGRAPHIC;

	const SRS_PT_POLAR_STEREOGRAPHIC = SRS_PT_POLAR_STEREOGRAPHIC;

	const SRS_PT_POLYCONIC = SRS_PT_POLYCONIC;

	const SRS_PT_ROBINSON = SRS_PT_ROBINSON;

	const SRS_PT_SINUSOIDAL = SRS_PT_SINUSOIDAL;

	const SRS_PT_STEREOGRAPHIC = SRS_PT_STEREOGRAPHIC;

	const SRS_PT_SWISS_OBLIQUE_CYLINDRICAL = SRS_PT_SWISS_OBLIQUE_CYLINDRICAL;

	const SRS_PT_TRANSVERSE_MERCATOR = SRS_PT_TRANSVERSE_MERCATOR;

	const SRS_PT_TRANSVERSE_MERCATOR_SOUTH_ORIENTED = SRS_PT_TRANSVERSE_MERCATOR_SOUTH_ORIENTED;

	const SRS_PT_TRANSVERSE_MERCATOR_MI_21 = SRS_PT_TRANSVERSE_MERCATOR_MI_21;

	const SRS_PT_TRANSVERSE_MERCATOR_MI_22 = SRS_PT_TRANSVERSE_MERCATOR_MI_22;

	const SRS_PT_TRANSVERSE_MERCATOR_MI_23 = SRS_PT_TRANSVERSE_MERCATOR_MI_23;

	const SRS_PT_TRANSVERSE_MERCATOR_MI_24 = SRS_PT_TRANSVERSE_MERCATOR_MI_24;

	const SRS_PT_TRANSVERSE_MERCATOR_MI_25 = SRS_PT_TRANSVERSE_MERCATOR_MI_25;

	const SRS_PT_TUNISIA_MINING_GRID = SRS_PT_TUNISIA_MINING_GRID;

	const SRS_PT_TWO_POINT_EQUIDISTANT = SRS_PT_TWO_POINT_EQUIDISTANT;

	const SRS_PT_VANDERGRINTEN = SRS_PT_VANDERGRINTEN;

	const SRS_PT_KROVAK = SRS_PT_KROVAK;

	const SRS_PT_IMW_POLYCONIC = SRS_PT_IMW_POLYCONIC;

	const SRS_PT_WAGNER_I = SRS_PT_WAGNER_I;

	const SRS_PT_WAGNER_II = SRS_PT_WAGNER_II;

	const SRS_PT_WAGNER_III = SRS_PT_WAGNER_III;

	const SRS_PT_WAGNER_IV = SRS_PT_WAGNER_IV;

	const SRS_PT_WAGNER_V = SRS_PT_WAGNER_V;

	const SRS_PT_WAGNER_VI = SRS_PT_WAGNER_VI;

	const SRS_PT_WAGNER_VII = SRS_PT_WAGNER_VII;

	const SRS_PP_CENTRAL_MERIDIAN = SRS_PP_CENTRAL_MERIDIAN;

	const SRS_PP_SCALE_FACTOR = SRS_PP_SCALE_FACTOR;

	const SRS_PP_STANDARD_PARALLEL_1 = SRS_PP_STANDARD_PARALLEL_1;

	const SRS_PP_STANDARD_PARALLEL_2 = SRS_PP_STANDARD_PARALLEL_2;

	const SRS_PP_PSEUDO_STD_PARALLEL_1 = SRS_PP_PSEUDO_STD_PARALLEL_1;

	const SRS_PP_LONGITUDE_OF_CENTER = SRS_PP_LONGITUDE_OF_CENTER;

	const SRS_PP_LATITUDE_OF_CENTER = SRS_PP_LATITUDE_OF_CENTER;

	const SRS_PP_LONGITUDE_OF_ORIGIN = SRS_PP_LONGITUDE_OF_ORIGIN;

	const SRS_PP_LATITUDE_OF_ORIGIN = SRS_PP_LATITUDE_OF_ORIGIN;

	const SRS_PP_FALSE_EASTING = SRS_PP_FALSE_EASTING;

	const SRS_PP_FALSE_NORTHING = SRS_PP_FALSE_NORTHING;

	const SRS_PP_AZIMUTH = SRS_PP_AZIMUTH;

	const SRS_PP_LONGITUDE_OF_POINT_1 = SRS_PP_LONGITUDE_OF_POINT_1;

	const SRS_PP_LATITUDE_OF_POINT_1 = SRS_PP_LATITUDE_OF_POINT_1;

	const SRS_PP_LONGITUDE_OF_POINT_2 = SRS_PP_LONGITUDE_OF_POINT_2;

	const SRS_PP_LATITUDE_OF_POINT_2 = SRS_PP_LATITUDE_OF_POINT_2;

	const SRS_PP_LONGITUDE_OF_POINT_3 = SRS_PP_LONGITUDE_OF_POINT_3;

	const SRS_PP_LATITUDE_OF_POINT_3 = SRS_PP_LATITUDE_OF_POINT_3;

	const SRS_PP_RECTIFIED_GRID_ANGLE = SRS_PP_RECTIFIED_GRID_ANGLE;

	const SRS_PP_LANDSAT_NUMBER = SRS_PP_LANDSAT_NUMBER;

	const SRS_PP_PATH_NUMBER = SRS_PP_PATH_NUMBER;

	const SRS_PP_PERSPECTIVE_POINT_HEIGHT = SRS_PP_PERSPECTIVE_POINT_HEIGHT;

	const SRS_PP_SATELLITE_HEIGHT = SRS_PP_SATELLITE_HEIGHT;

	const SRS_PP_FIPSZONE = SRS_PP_FIPSZONE;

	const SRS_PP_ZONE = SRS_PP_ZONE;

	const SRS_PP_LATITUDE_OF_1ST_POINT = SRS_PP_LATITUDE_OF_1ST_POINT;

	const SRS_PP_LONGITUDE_OF_1ST_POINT = SRS_PP_LONGITUDE_OF_1ST_POINT;

	const SRS_PP_LATITUDE_OF_2ND_POINT = SRS_PP_LATITUDE_OF_2ND_POINT;

	const SRS_PP_LONGITUDE_OF_2ND_POINT = SRS_PP_LONGITUDE_OF_2ND_POINT;

	const SRS_UL_METER = SRS_UL_METER;

	const SRS_UL_FOOT = SRS_UL_FOOT;

	const SRS_UL_FOOT_CONV = SRS_UL_FOOT_CONV;

	const SRS_UL_US_FOOT = SRS_UL_US_FOOT;

	const SRS_UL_US_FOOT_CONV = SRS_UL_US_FOOT_CONV;

	const SRS_UL_NAUTICAL_MILE = SRS_UL_NAUTICAL_MILE;

	const SRS_UL_NAUTICAL_MILE_CONV = SRS_UL_NAUTICAL_MILE_CONV;

	const SRS_UL_LINK = SRS_UL_LINK;

	const SRS_UL_LINK_CONV = SRS_UL_LINK_CONV;

	const SRS_UL_CHAIN = SRS_UL_CHAIN;

	const SRS_UL_CHAIN_CONV = SRS_UL_CHAIN_CONV;

	const SRS_UL_ROD = SRS_UL_ROD;

	const SRS_UL_ROD_CONV = SRS_UL_ROD_CONV;

	const SRS_UA_DEGREE = SRS_UA_DEGREE;

	const SRS_UA_DEGREE_CONV = SRS_UA_DEGREE_CONV;

	const SRS_UA_RADIAN = SRS_UA_RADIAN;

	const SRS_PM_GREENWICH = SRS_PM_GREENWICH;

	const SRS_DN_NAD27 = SRS_DN_NAD27;

	const SRS_DN_NAD83 = SRS_DN_NAD83;

	const SRS_DN_WGS72 = SRS_DN_WGS72;

	const SRS_DN_WGS84 = SRS_DN_WGS84;

	const SRS_WGS84_SEMIMAJOR = SRS_WGS84_SEMIMAJOR;

	const SRS_WGS84_INVFLATTENING = SRS_WGS84_INVFLATTENING;

	static function GetWellKnownGeogCSAsWKT($name) {
		return GetWellKnownGeogCSAsWKT($name);
	}

	static function GetUserInputAsWKT($name) {
		return GetUserInputAsWKT($name);
	}

	static function GetProjectionMethods() {
		return GetProjectionMethods();
	}

	static function GetProjectionMethodParameterList($method,$username) {
		return GetProjectionMethodParameterList($method,$username);
	}

	static function GetProjectionMethodParamInfo($method,$param,$usrname,$type,$defaultval) {
		GetProjectionMethodParamInfo($method,$param,$usrname,$type,$defaultval);
	}
}

/* PHP Proxy Classes */
class SpatialReference {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_osr_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_osr_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	public function __construct($wkt="") {
		if (is_resource($wkt) && get_resource_type($wkt) === '_p_OSRSpatialReferenceShadow') {
			$this->_cPtr=$wkt;
			return;
		}
		$this->_cPtr=new_SpatialReference($wkt);
	}

	public function __str__() {
		return SpatialReference___str__($this->_cPtr);
	}

	public function IsSame($rhs) {
		return SpatialReference_IsSame($this->_cPtr,$rhs);
	}

	public function IsSameGeogCS($rhs) {
		return SpatialReference_IsSameGeogCS($this->_cPtr,$rhs);
	}

	public function IsGeographic() {
		return SpatialReference_IsGeographic($this->_cPtr);
	}

	public function IsProjected() {
		return SpatialReference_IsProjected($this->_cPtr);
	}

	public function IsLocal() {
		return SpatialReference_IsLocal($this->_cPtr);
	}

	public function EPSGTreatsAsLatLong() {
		return SpatialReference_EPSGTreatsAsLatLong($this->_cPtr);
	}

	public function SetAuthority($pszTargetKey,$pszAuthority,$nCode) {
		return SpatialReference_SetAuthority($this->_cPtr,$pszTargetKey,$pszAuthority,$nCode);
	}

	public function GetAttrValue($name,$child=0) {
		return SpatialReference_GetAttrValue($this->_cPtr,$name,$child);
	}

	public function SetAttrValue($name,$value) {
		return SpatialReference_SetAttrValue($this->_cPtr,$name,$value);
	}

	public function SetAngularUnits($name,$to_radians) {
		return SpatialReference_SetAngularUnits($this->_cPtr,$name,$to_radians);
	}

	public function GetAngularUnits() {
		return SpatialReference_GetAngularUnits($this->_cPtr);
	}

	public function SetLinearUnits($name,$to_meters) {
		return SpatialReference_SetLinearUnits($this->_cPtr,$name,$to_meters);
	}

	public function SetLinearUnitsAndUpdateParameters($name,$to_meters) {
		return SpatialReference_SetLinearUnitsAndUpdateParameters($this->_cPtr,$name,$to_meters);
	}

	public function GetLinearUnits() {
		return SpatialReference_GetLinearUnits($this->_cPtr);
	}

	public function GetLinearUnitsName() {
		return SpatialReference_GetLinearUnitsName($this->_cPtr);
	}

	public function GetAuthorityCode($target_key) {
		return SpatialReference_GetAuthorityCode($this->_cPtr,$target_key);
	}

	public function GetAuthorityName($target_key) {
		return SpatialReference_GetAuthorityName($this->_cPtr,$target_key);
	}

	public function SetUTM($zone,$north=1) {
		return SpatialReference_SetUTM($this->_cPtr,$zone,$north);
	}

	public function GetUTMZone() {
		return SpatialReference_GetUTMZone($this->_cPtr);
	}

	public function SetStatePlane($zone,$is_nad83=1,$unitsname="",$units=0.0) {
		return SpatialReference_SetStatePlane($this->_cPtr,$zone,$is_nad83,$unitsname,$units);
	}

	public function AutoIdentifyEPSG() {
		return SpatialReference_AutoIdentifyEPSG($this->_cPtr);
	}

	public function SetProjection($arg) {
		return SpatialReference_SetProjection($this->_cPtr,$arg);
	}

	public function SetProjParm($name,$val) {
		return SpatialReference_SetProjParm($this->_cPtr,$name,$val);
	}

	public function GetProjParm($name,$default_val=0.0) {
		return SpatialReference_GetProjParm($this->_cPtr,$name,$default_val);
	}

	public function SetNormProjParm($name,$val) {
		return SpatialReference_SetNormProjParm($this->_cPtr,$name,$val);
	}

	public function GetNormProjParm($name,$default_val=0.0) {
		return SpatialReference_GetNormProjParm($this->_cPtr,$name,$default_val);
	}

	public function GetSemiMajor() {
		return SpatialReference_GetSemiMajor($this->_cPtr);
	}

	public function GetSemiMinor() {
		return SpatialReference_GetSemiMinor($this->_cPtr);
	}

	public function GetInvFlattening() {
		return SpatialReference_GetInvFlattening($this->_cPtr);
	}

	public function SetACEA($stdp1,$stdp2,$clat,$clong,$fe,$fn) {
		return SpatialReference_SetACEA($this->_cPtr,$stdp1,$stdp2,$clat,$clong,$fe,$fn);
	}

	public function SetAE($clat,$clong,$fe,$fn) {
		return SpatialReference_SetAE($this->_cPtr,$clat,$clong,$fe,$fn);
	}

	public function SetBonne($stdp,$cm,$fe,$fn) {
		return SpatialReference_SetBonne($this->_cPtr,$stdp,$cm,$fe,$fn);
	}

	public function SetCEA($stdp1,$cm,$fe,$fn) {
		return SpatialReference_SetCEA($this->_cPtr,$stdp1,$cm,$fe,$fn);
	}

	public function SetCS($clat,$clong,$fe,$fn) {
		return SpatialReference_SetCS($this->_cPtr,$clat,$clong,$fe,$fn);
	}

	public function SetEC($stdp1,$stdp2,$clat,$clong,$fe,$fn) {
		return SpatialReference_SetEC($this->_cPtr,$stdp1,$stdp2,$clat,$clong,$fe,$fn);
	}

	public function SetEckertIV($cm,$fe,$fn) {
		return SpatialReference_SetEckertIV($this->_cPtr,$cm,$fe,$fn);
	}

	public function SetEckertVI($cm,$fe,$fn) {
		return SpatialReference_SetEckertVI($this->_cPtr,$cm,$fe,$fn);
	}

	public function SetEquirectangular($clat,$clong,$fe,$fn) {
		return SpatialReference_SetEquirectangular($this->_cPtr,$clat,$clong,$fe,$fn);
	}

	public function SetEquirectangular2($clat,$clong,$pseudostdparallellat,$fe,$fn) {
		return SpatialReference_SetEquirectangular2($this->_cPtr,$clat,$clong,$pseudostdparallellat,$fe,$fn);
	}

	public function SetGaussSchreiberTMercator($clat,$clong,$sc,$fe,$fn) {
		return SpatialReference_SetGaussSchreiberTMercator($this->_cPtr,$clat,$clong,$sc,$fe,$fn);
	}

	public function SetGS($cm,$fe,$fn) {
		return SpatialReference_SetGS($this->_cPtr,$cm,$fe,$fn);
	}

	public function SetGH($cm,$fe,$fn) {
		return SpatialReference_SetGH($this->_cPtr,$cm,$fe,$fn);
	}

	public function SetGEOS($cm,$satelliteheight,$fe,$fn) {
		return SpatialReference_SetGEOS($this->_cPtr,$cm,$satelliteheight,$fe,$fn);
	}

	public function SetGnomonic($clat,$clong,$fe,$fn) {
		return SpatialReference_SetGnomonic($this->_cPtr,$clat,$clong,$fe,$fn);
	}

	public function SetHOM($clat,$clong,$azimuth,$recttoskew,$scale,$fe,$fn) {
		return SpatialReference_SetHOM($this->_cPtr,$clat,$clong,$azimuth,$recttoskew,$scale,$fe,$fn);
	}

	public function SetHOM2PNO($clat,$dfLat1,$dfLong1,$dfLat2,$dfLong2,$scale,$fe,$fn) {
		return SpatialReference_SetHOM2PNO($this->_cPtr,$clat,$dfLat1,$dfLong1,$dfLat2,$dfLong2,$scale,$fe,$fn);
	}

	public function SetKrovak($clat,$clong,$azimuth,$pseudostdparallellat,$scale,$fe,$fn) {
		return SpatialReference_SetKrovak($this->_cPtr,$clat,$clong,$azimuth,$pseudostdparallellat,$scale,$fe,$fn);
	}

	public function SetLAEA($clat,$clong,$fe,$fn) {
		return SpatialReference_SetLAEA($this->_cPtr,$clat,$clong,$fe,$fn);
	}

	public function SetLCC($stdp1,$stdp2,$clat,$clong,$fe,$fn) {
		return SpatialReference_SetLCC($this->_cPtr,$stdp1,$stdp2,$clat,$clong,$fe,$fn);
	}

	public function SetLCC1SP($clat,$clong,$scale,$fe,$fn) {
		return SpatialReference_SetLCC1SP($this->_cPtr,$clat,$clong,$scale,$fe,$fn);
	}

	public function SetLCCB($stdp1,$stdp2,$clat,$clong,$fe,$fn) {
		return SpatialReference_SetLCCB($this->_cPtr,$stdp1,$stdp2,$clat,$clong,$fe,$fn);
	}

	public function SetMC($clat,$clong,$fe,$fn) {
		return SpatialReference_SetMC($this->_cPtr,$clat,$clong,$fe,$fn);
	}

	public function SetMercator($clat,$clong,$scale,$fe,$fn) {
		return SpatialReference_SetMercator($this->_cPtr,$clat,$clong,$scale,$fe,$fn);
	}

	public function SetMollweide($cm,$fe,$fn) {
		return SpatialReference_SetMollweide($this->_cPtr,$cm,$fe,$fn);
	}

	public function SetNZMG($clat,$clong,$fe,$fn) {
		return SpatialReference_SetNZMG($this->_cPtr,$clat,$clong,$fe,$fn);
	}

	public function SetOS($dfOriginLat,$dfCMeridian,$scale,$fe,$fn) {
		return SpatialReference_SetOS($this->_cPtr,$dfOriginLat,$dfCMeridian,$scale,$fe,$fn);
	}

	public function SetOrthographic($clat,$clong,$fe,$fn) {
		return SpatialReference_SetOrthographic($this->_cPtr,$clat,$clong,$fe,$fn);
	}

	public function SetPolyconic($clat,$clong,$fe,$fn) {
		return SpatialReference_SetPolyconic($this->_cPtr,$clat,$clong,$fe,$fn);
	}

	public function SetPS($clat,$clong,$scale,$fe,$fn) {
		return SpatialReference_SetPS($this->_cPtr,$clat,$clong,$scale,$fe,$fn);
	}

	public function SetRobinson($clong,$fe,$fn) {
		return SpatialReference_SetRobinson($this->_cPtr,$clong,$fe,$fn);
	}

	public function SetSinusoidal($clong,$fe,$fn) {
		return SpatialReference_SetSinusoidal($this->_cPtr,$clong,$fe,$fn);
	}

	public function SetStereographic($clat,$clong,$scale,$fe,$fn) {
		return SpatialReference_SetStereographic($this->_cPtr,$clat,$clong,$scale,$fe,$fn);
	}

	public function SetSOC($latitudeoforigin,$cm,$fe,$fn) {
		return SpatialReference_SetSOC($this->_cPtr,$latitudeoforigin,$cm,$fe,$fn);
	}

	public function SetTM($clat,$clong,$scale,$fe,$fn) {
		return SpatialReference_SetTM($this->_cPtr,$clat,$clong,$scale,$fe,$fn);
	}

	public function SetTMVariant($pszVariantName,$clat,$clong,$scale,$fe,$fn) {
		return SpatialReference_SetTMVariant($this->_cPtr,$pszVariantName,$clat,$clong,$scale,$fe,$fn);
	}

	public function SetTMG($clat,$clong,$fe,$fn) {
		return SpatialReference_SetTMG($this->_cPtr,$clat,$clong,$fe,$fn);
	}

	public function SetTMSO($clat,$clong,$scale,$fe,$fn) {
		return SpatialReference_SetTMSO($this->_cPtr,$clat,$clong,$scale,$fe,$fn);
	}

	public function SetVDG($clong,$fe,$fn) {
		return SpatialReference_SetVDG($this->_cPtr,$clong,$fe,$fn);
	}

	public function SetWellKnownGeogCS($name) {
		return SpatialReference_SetWellKnownGeogCS($this->_cPtr,$name);
	}

	public function SetFromUserInput($name) {
		return SpatialReference_SetFromUserInput($this->_cPtr,$name);
	}

	public function CopyGeogCSFrom($rhs) {
		return SpatialReference_CopyGeogCSFrom($this->_cPtr,$rhs);
	}

	public function SetTOWGS84($p1,$p2,$p3,$p4=0.0,$p5=0.0,$p6=0.0,$p7=0.0) {
		return SpatialReference_SetTOWGS84($this->_cPtr,$p1,$p2,$p3,$p4,$p5,$p6,$p7);
	}

	public function GetTOWGS84() {
		return SpatialReference_GetTOWGS84($this->_cPtr);
	}

	public function SetLocalCS($pszName) {
		return SpatialReference_SetLocalCS($this->_cPtr,$pszName);
	}

	public function SetGeogCS($pszGeogName,$pszDatumName,$pszEllipsoidName,$dfSemiMajor,$dfInvFlattening,$pszPMName="Greenwich",$dfPMOffset=0.0,$pszUnits="degree",$dfConvertToRadians=0.0174532925199433) {
		return SpatialReference_SetGeogCS($this->_cPtr,$pszGeogName,$pszDatumName,$pszEllipsoidName,$dfSemiMajor,$dfInvFlattening,$pszPMName,$dfPMOffset,$pszUnits,$dfConvertToRadians);
	}

	public function SetProjCS($name="unnamed") {
		return SpatialReference_SetProjCS($this->_cPtr,$name);
	}

	public function ImportFromWkt($ppszInput) {
		return SpatialReference_ImportFromWkt($this->_cPtr,$ppszInput);
	}

	public function ImportFromProj4($ppszInput) {
		return SpatialReference_ImportFromProj4($this->_cPtr,$ppszInput);
	}

	public function ImportFromUrl($url) {
		return SpatialReference_ImportFromUrl($this->_cPtr,$url);
	}

	public function ImportFromESRI($ppszInput) {
		return SpatialReference_ImportFromESRI($this->_cPtr,$ppszInput);
	}

	public function ImportFromEPSG($arg) {
		return SpatialReference_ImportFromEPSG($this->_cPtr,$arg);
	}

	public function ImportFromEPSGA($arg) {
		return SpatialReference_ImportFromEPSGA($this->_cPtr,$arg);
	}

	public function ImportFromPCI($proj,$units="METRE",$argin=null) {
		switch (func_num_args()) {
		case 1: case 2: $r=SpatialReference_ImportFromPCI($this->_cPtr,$proj,$units); break;
		default: $r=SpatialReference_ImportFromPCI($this->_cPtr,$proj,$units,$argin);
		}
		return $r;
	}

	public function ImportFromUSGS($proj_code,$zone=0,$argin=null,$datum_code=0) {
		switch (func_num_args()) {
		case 1: case 2: $r=SpatialReference_ImportFromUSGS($this->_cPtr,$proj_code,$zone); break;
		default: $r=SpatialReference_ImportFromUSGS($this->_cPtr,$proj_code,$zone,$argin,$datum_code);
		}
		return $r;
	}

	public function ImportFromXML($xmlString) {
		return SpatialReference_ImportFromXML($this->_cPtr,$xmlString);
	}

	public function ImportFromERM($proj,$datum,$units) {
		return SpatialReference_ImportFromERM($this->_cPtr,$proj,$datum,$units);
	}

	public function ImportFromMICoordSys($pszCoordSys) {
		return SpatialReference_ImportFromMICoordSys($this->_cPtr,$pszCoordSys);
	}

	public function ExportToWkt() {
		return SpatialReference_ExportToWkt($this->_cPtr);
	}

	public function ExportToPrettyWkt($simplify=0) {
		return SpatialReference_ExportToPrettyWkt($this->_cPtr,$simplify);
	}

	public function ExportToProj4() {
		return SpatialReference_ExportToProj4($this->_cPtr);
	}

	public function ExportToPCI() {
		return SpatialReference_ExportToPCI($this->_cPtr);
	}

	public function ExportToUSGS() {
		return SpatialReference_ExportToUSGS($this->_cPtr);
	}

	public function ExportToXML($dialect="") {
		return SpatialReference_ExportToXML($this->_cPtr,$dialect);
	}

	public function ExportToMICoordSys() {
		return SpatialReference_ExportToMICoordSys($this->_cPtr);
	}

	public function CloneGeogCS() {
		$r=SpatialReference_CloneGeogCS($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new SpatialReference($r);
			}
			return new $c($r);
		}
		return $r;
	}

	public function c_Clone() {
		$r=SpatialReference_c_Clone($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (!class_exists($c)) {
				return new SpatialReference($r);
			}
			return new $c($r);
		}
		return $r;
	}

	public function Validate() {
		return SpatialReference_Validate($this->_cPtr);
	}

	public function StripCTParms() {
		return SpatialReference_StripCTParms($this->_cPtr);
	}

	public function FixupOrdering() {
		return SpatialReference_FixupOrdering($this->_cPtr);
	}

	public function Fixup() {
		return SpatialReference_Fixup($this->_cPtr);
	}

	public function MorphToESRI() {
		return SpatialReference_MorphToESRI($this->_cPtr);
	}

	public function MorphFromESRI() {
		return SpatialReference_MorphFromESRI($this->_cPtr);
	}
}

class CoordinateTransformation {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_osr_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_osr_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	public function __construct($src,$dst) {
		if (is_resource($src) && get_resource_type($src) === '_p_OSRCoordinateTransformationShadow') {
			$this->_cPtr=$src;
			return;
		}
		$this->_cPtr=new_CoordinateTransformation($src,$dst);
	}

	public function TransformPoint($inout_or_x,$y=null,$z=0.0) {
		switch (func_num_args()) {
		case 1: CoordinateTransformation_TransformPoint($this->_cPtr,$inout_or_x); break;
		default: CoordinateTransformation_TransformPoint($this->_cPtr,$inout_or_x,$y,$z);
		}
	}

	public function TransformPoints($nCount,$x,$y,$z) {
		CoordinateTransformation_TransformPoints($this->_cPtr,$nCount,$x,$y,$z);
	}
}


?>
