<?
$u_total = 0;

////////////
// _____ //
//////////
// ___
//	$u_s1 = new DateTime("");
//	$u_e1 = new DateTime("");
//	$u_i1 = $u_s1->diff($u_e1)->days;
// Totaal
//	$u_total =   $u_i1;
	

//////////////
// 99.999 ///
////////////
// POL
	$u99999_s1 = new DateTime("2010-09-14");
	$u99999_e1 = new DateTime("2014-02-09");
	$u99999_i1 = $u99999_s1->diff($u99999_e1)->days;
// TDF
	$u99999_s2 = new DateTime("2012-06-19");
	$u99999_e2 = new DateTime("2012-08-01");
	$u99999_i2 = $u99999_s2->diff($u99999_e2)->days;
// TDF
	$u99999_s3 = new DateTime("2013-06-09");
	$u99999_e3 = new DateTime("2013-07-29");
	$u99999_i3 = $u99999_s3->diff($u99999_e3)->days;
//Totaal
	$u99999_total =   $u99999_i1;

	
	
/////////////////
// ajacied4lf //
///////////////
// BNW
	$uajacied4lf_s1 = new DateTime("2013-06-04");
	$uajacied4lf_e1 = new DateTime();
	$uajacied4lf_i1 = $uajacied4lf_s1->diff($uajacied4lf_e1)->days;
//Totaal
	$uajacied4lf_total =   $uajacied4lf_i1;
	


////////////
// Anne ///
//////////
// PUB
	$uAnne_s1 = new DateTime("2005-08-16");
	$uAnne_e1 = new DateTime("2006-02-13");
	$uAnne_i1 = $uAnne_s1->diff($uAnne_e1)->days;
// SES
	$uAnne_s2 = new DateTime("2006-01-03");
	$uAnne_e2 = new DateTime("2006-02-13");
	$uAnne_i2 = $uAnne_s2->diff($uAnne_e2)->days;
// F&F
	$uAnne_s3 = new DateTime("2006-08-07");
	$uAnne_e3 = new DateTime("2007-02-11");
	$uAnne_i3 = $uAnne_s3->diff($uAnne_e3)->days;
// B&H
	$uAnne_s4 = new DateTime("2006-11-22");
	$uAnne_e4 = new DateTime("2007-02-11");
	$uAnne_i4 = $uAnne_s4->diff($uAnne_e4)->days;
// GAM
	$uAnne_s5 = new DateTime("2007-03-27");
	$uAnne_e5 = new DateTime("2007-07-03");
	$uAnne_i5 = $uAnne_s5->diff($uAnne_e5)->days;
// PTA
	$uAnne_s6 = new DateTime("2009-12-08");
	$uAnne_e6 = new DateTime();
	$uAnne_i6 = $uAnne_s6->diff($uAnne_e6)->days;
// KAA
	$uAnne_s7 = new DateTime("2010-07-28");
	$uAnne_e7 = new DateTime("2010-08-30");
	$uAnne_i7 = $uAnne_s7->diff($uAnne_e7)->days;
// REV
	$uAnne_s8 = new DateTime("2011-01-10");
	$uAnne_e8 = new DateTime("2012-01-19");
	$uAnne_i8 = $uAnne_s8->diff($uAnne_e8)->days;
// Totaal
	$uAnne_total = $uAnne_i1 + $uAnne_i3 + $uAnne_i5 + $uAnne_i6;
//PR
	$uAnne_fs1 = new DateTime("2011-07-02");
	$uAnne_fe1 = new DateTime("2011-12-22");
	$uAnne_fi1 = $uAnne_fs1->diff($uAnne_fe1)->days;
//PR (II)
	$uAnne_fs2 = new DateTime("2013-11-07");
	$uAnne_fe2 = new DateTime();
	$uAnne_fi2 = $uAnne_fs2->diff($uAnne_fe2)->days;



///////////
// APK ///
//////////
// UVT
	$uAPK_s1 = new DateTime("2012-01-23");
	$uAPK_e1 = new DateTime();
	$uAPK_i1 = $uAPK_s1->diff($uAPK_e1)->days;
// Totaal
	$uAPK_total = $uAPK_i1;


	
/////////////////
// arachide. ///
///////////////
// JNG
	$uarachide_s1 = new DateTime("2013-04-20");
	$uarachide_e1 = new DateTime("2013-08-04");
	$uarachide_i1 = $uarachide_s1->diff($uarachide_e1)->days;
// Totaal
	$uarachide_total = $uarachide_i1;



/////////////////////
// Automatic_Rock //
///////////////////
// TTK
	$uAutomatic_Rock_s1 = new DateTime("2004-12-18");
	$uAutomatic_Rock_e1 = new DateTime();
	$uAutomatic_Rock_i1 = $uAutomatic_Rock_s1->diff($uAutomatic_Rock_e1)->days;
//Totaal
	$uAutomatic_Rock_total =   $uAutomatic_Rock_i1;
	
	

////////////
// Bart ///
//////////
// GAM
	$uBart_s1 = new DateTime("2009-02-11");
	$uBart_e1 = new DateTime("2009-05-17");
	$uBart_i1 = $uBart_s1->diff($uBart_e1)->days;
// MEN
	$uBart_s2 = new DateTime("2011-07-30");
	$uBart_e2 = new DateTime();
	$uBart_i2 = $uBart_s2->diff($uBart_e2)->days;
// DIG
	$uBart_s3 = new DateTime("2011-11-16");
	$uBart_e3 = new DateTime();
	$uBart_i3 = $uBart_s3->diff($uBart_e3)->days;
// Totaal
	$uBart_total = $uBart_i1 + $uBart_i2;				
// Redactie Games
	$uBart_fs1 = new DateTime("2008-08-17");
	$uBart_fe1 = new DateTime("2009-05-17");
	$uBart_fi1 = $uBart_fs1->diff($uBart_fe1)->days;
// PR
	$uBart_fs2 = new DateTime("2011-12-11");
	$uBart_fe2 = new DateTime();
	$uBart_fi2 = $uBart_fs2->diff($uBart_fe2)->days;



/////////////
// belsen //
///////////
// MUZ
	$ubelsen_s1 = new DateTime("2007-04-01");
	$ubelsen_e1 = new DateTime();
	$ubelsen_i1 = $ubelsen_s1->diff($ubelsen_e1)->days;
// LWL 2009
	$ubelsen_s2 = new DateTime("2009-06-01");
	$ubelsen_e2 = new DateTime("2009-09-14");
	$ubelsen_i2 = $ubelsen_s2->diff($ubelsen_e2)->days;
// LWL 2010
	$ubelsen_s3 = new DateTime("2009-07-06");
	$ubelsen_e3 = new DateTime("2009-09-10");
	$ubelsen_i3 = $ubelsen_s3->diff($ubelsen_e3)->days;
// FMM
	$ubelsen_s4 = new DateTime("2010-09-19");
	$ubelsen_e4 = new DateTime("2011-04-13");
	$ubelsen_i4 = $ubelsen_s4->diff($ubelsen_e4)->days;
// LWL 2011
	$ubelsen_s5 = new DateTime("2011-06-13");
	$ubelsen_e5 = new DateTime("2011-10-04");
	$ubelsen_i5 = $ubelsen_s5->diff($ubelsen_e5)->days;
// LWL 2012
	$ubelsen_s6 = new DateTime("2012-06-18");
	$ubelsen_e6 = new DateTime("2012-08-27");
	$ubelsen_i6 = $ubelsen_s6->diff($ubelsen_e6)->days;
// LWL 2013
	$ubelsen_s7 = new DateTime("2013-07-08");
	$ubelsen_e7 = new DateTime();
	$ubelsen_i7 = $ubelsen_s7->diff($ubelsen_e7)->days;
// Totaal
	$ubelsen_total = $ubelsen_i1;



/////////////////
// boem-dikkie  //
///////////////
// B&H
	$uboemdikkie_s1 = new DateTime("2007-02-12");
	$uboemdikkie_e1 = new DateTime("2011-06-06");
	$uboemdikkie_i1 = $uboemdikkie_s1->diff($uboemdikkie_e1)->days;
// GAM
	$uboemdikkie_s2 = new DateTime("2010-01-03");
	$uboemdikkie_e2 = new DateTime();
	$uboemdikkie_i2 = $uboemdikkie_s2->diff($uboemdikkie_e2)->days;
// Totaal
	$uboemdikkie_s = new DateTime("2007-02-12");
	$uboemdikkie_e = new DateTime("");
	$uboemdikkie_i = $uboemdikkie_s->diff($uboemdikkie_e)->days;
	$uboemdikkie_total = $uboemdikkie_i;

	
	
/////////////////
// Bosbeetle  //
///////////////
// MUZ
	$uBosbeetle_s1 = new DateTime("2011-11-10");
	$uBosbeetle_e1 = new DateTime();
	$uBosbeetle_i1 = $uBosbeetle_s1->diff($uBosbeetle_e1)->days;
// LWL
	$uBosbeetle_s2 = new DateTime("2012-06-18");
	$uBosbeetle_e2 = new DateTime("2012-08-27");
	$uBosbeetle_i2 = $uBosbeetle_s2->diff($uBosbeetle_e2)->days;
// Totaal
	$uBosbeetle_total = $uBosbeetle_i1;
// PR
	$uBosbeetle_fs1 = new DateTime("2012-06-04");
	$uBosbeetle_fe1 = new DateTime();
	$uBosbeetle_fi1 = $uBosbeetle_fs1->diff($uBosbeetle_fe1)->days;
	

	
//////////////////
// Brighteyes  //
////////////////
// OUD
	$uBrighteyes_s1 = new DateTime("2004-07-29");
	$uBrighteyes_e1 = new DateTime("2006-07-12");
	$uBrighteyes_i1 = $uBrighteyes_s1->diff($uBrighteyes_e1)->days;
// GC
	$uBrighteyes_s2 = new DateTime("2004-12-07");
	$uBrighteyes_e2 = new DateTime("2005-05-26");
	$uBrighteyes_i2 = $uBrighteyes_s2->diff($uBrighteyes_e2)->days;
// K&W
	$uBrighteyes_s3 = new DateTime("2005-04-30");
	$uBrighteyes_e3 = new DateTime("2006-07-12");
	$uBrighteyes_i3 = $uBrighteyes_s3->diff($uBrighteyes_e3)->days;
// OUD
	$uBrighteyes_s4 = new DateTime("2006-08-30");
	$uBrighteyes_e4 = new DateTime();
	$uBrighteyes_i4 = $uBrighteyes_s4->diff($uBrighteyes_e4)->days;
// LIF
	$uBrighteyes_s5 = new DateTime("2006-08-31");
	$uBrighteyes_e5 = new DateTime("2007-01-18");
	$uBrighteyes_i5 = $uBrighteyes_s5->diff($uBrighteyes_e5)->days;
// K&W
	$uBrighteyes_s6 = new DateTime("2006-10-21");
	$uBrighteyes_e6 = new DateTime("2008-03-07");
	$uBrighteyes_i6 = $uBrighteyes_s6->diff($uBrighteyes_e6)->days;
// Totaal
	$uBrighteyes_total = $uBrighteyes_i1 + $uBrighteyes_i4;


	
/////////////
// Cat22  //
///////////
// FHF
	$uCat22_s1 = new DateTime("2010-11-27");
	$uCat22_e1 = new DateTime();
	$uCat22_i1 = $uCat22_s1->diff($uCat22_e1)->days;
// Totaal
	$uCat22_total = $uCat22_i1;
	

	
//////////////
// Cobra4  //
////////////
// DEF
	$uCobra4_s1 = new DateTime("2011-08-25");
	$uCobra4_e1 = new DateTime();
	$uCobra4_i1 = $uCobra4_s1->diff($uCobra4_e1)->days;
// C&H
	$uCobra4_s2 = new DateTime("2012-02-04");
	$uCobra4_e2 = new DateTime();
	$uCobra4_i2 = $uCobra4_s2->diff($uCobra4_e2)->days;
// Totaal
	$uCobra4_total = $uCobra4_i1;



///////////////
// Copycat ///
/////////////
// R&P
	$uCopycat_s1 = new DateTime("2004-11-28");
	$uCopycat_e1 = new DateTime("2006-08-09");
	$uCopycat_i1 = $uCopycat_s1->diff($uCopycat_e1)->days;
// SHO
	$uCopycat_s2 = new DateTime("2005-07-11");
	$uCopycat_e2 = new DateTime("2006-08-09");
	$uCopycat_i2 = $uCopycat_s2->diff($uCopycat_e2)->days;
// Totaal
	$uCopycat_total = $uCopycat_i1;


	
/////////////
// DaMart //
////////////
//TTK
	$uDaMart_s1 = new DateTime("2007-09-10");
	$uDaMart_e1 = new DateTime();
	$uDaMart_i1 = $uDaMart_s1->diff($uDaMart_e1)->days;
// KSW 2007
	$uDaMart_s2 = new DateTime("2007-11-13");
	$uDaMart_e2 = new DateTime("2008-01-26");
	$uDaMart_i2 = $uDaMart_s2->diff($uDaMart_e2)->days;
// NWB
	$uDaMart_s3 = new DateTime("2008-02-20");
	$uDaMart_e3 = new DateTime("2008-05-14");
	$uDaMart_i3 = $uDaMart_s3->diff($uDaMart_e3)->days;
// KSW 2008
	$uDaMart_s4 = new DateTime("2008-11-20");
	$uDaMart_e4 = new DateTime("2009-01-15");
	$uDaMart_i4 = $uDaMart_s4->diff($uDaMart_e4)->days;
// KSW 2009
	$uDaMart_s5 = new DateTime("2009-12-06");
	$uDaMart_e5 = new DateTime("2010-01-31");
	$uDaMart_i5 = $uDaMart_s5->diff($uDaMart_e5)->days;
// KSW 2010
	$uDaMart_s6 = new DateTime("2010-12-06");
	$uDaMart_e6 = new DateTime("2011-01-06");
	$uDaMart_i6 = $uDaMart_s6->diff($uDaMart_e6)->days;
// KSW 2011
	$uDaMart_s7 = new DateTime("2011-12-05");
	$uDaMart_e7 = new DateTime("2012-01-06");
	$uDaMart_i7 = $uDaMart_s7->diff($uDaMart_e7)->days;
// KSW 2012
	$uDaMart_s8 = new DateTime("2012-12-05");
	$uDaMart_e8 = new DateTime("2013-01-07");
	$uDaMart_i8 = $uDaMart_s8->diff($uDaMart_e8)->days;
// Totaal
	$uDaMart_total = $uDaMart_i1;
// PR
	$uDaMart_fs1 = new DateTime("2010-08-10");
	$uDaMart_fe1 = new DateTime();
	$uDaMart_fi1 = $uDaMart_fs1->diff($uDaMart_fe1)->days;



///////////////////
// Dark_Anglus  //
/////////////////
// PUB
	$uDark_Angelus_s1 = new DateTime("2006-09-05");
	$uDark_Angelus_e1 = new DateTime("2008-02-28");
	$uDark_Angelus_i1 = $uDark_Angelus_s1->diff($uDark_Angelus_e1)->days;
// FEE
	$uDark_Angelus_s2 = new DateTime("2006-11-20");
	$uDark_Angelus_e2 = new DateTime("2007-01-07");
	$uDark_Angelus_i2 = $uDark_Angelus_s2->diff($uDark_Angelus_e2)->days;
// FOT
	$uDark_Angelus_s3 = new DateTime("2013-06-10");
	$uDark_Angelus_e3 = new DateTime();
	$uDark_Angelus_i3 = $uDark_Angelus_s3->diff($uDark_Angelus_e3)->days;
// LWL
	$uDark_Angelus_s4 = new DateTime("2013-07-08");
	$uDark_Angelus_e4 = new DateTime();
	$uDark_Angelus_i4 = $uDark_Angelus_s4->diff($uDark_Angelus_e4)->days;
// Totaal
	$uDark_Angelus_total = $uDark_Angelus_i1 + $uDark_Angelus_i3;
//FOK!fotograaf
	$uDark_Angelus_fs1 = new DateTime("2010-04-13");
	$uDark_Angelus_fe1 = new DateTime();
	$uDark_Angelus_fi1 = $uDark_Angelus_fs1->diff($uDark_Angelus_fe1)->days;



/////////////////////
// De_Taartjesfee //
///////////////////
// TTK
	$uDe_Taartjesfee_s1 = new DateTime("2013-06-30");
	$uDe_Taartjesfee_e1 = new DateTime();
	$uDe_Taartjesfee_i1 = $uDe_Taartjesfee_s1->diff($uDe_Taartjesfee_e1)->days;
//Totaal
	$uDe_Taartjesfee_total =   $uDe_Taartjesfee_i1;




//////////////////
// debuurvrouw //
////////////////
// OUD
	$udebuurvrouw_s1 = new DateTime("2012-10-21");
	$udebuurvrouw_e1 = new DateTime();
	$udebuurvrouw_i1 = $udebuurvrouw_s1->diff($udebuurvrouw_e1)->days;
//Totaal
	$udebuurvrouw_total =   $udebuurvrouw_i1;



//////////////////
// Dubbeldrank //
////////////////
// V&A
	$uDubbeldrank_s1 = new DateTime("2008-05-25");
	$uDubbeldrank_e1 = new DateTime("2009-08-17");
	$uDubbeldrank_i1 = $uDubbeldrank_s1->diff($uDubbeldrank_e1)->days;
// V&A
	$uDubbeldrank_s2 = new DateTime("2009-11-29");
	$uDubbeldrank_e2 = new DateTime("2012-12-21");
	$uDubbeldrank_i2 = $uDubbeldrank_s2->diff($uDubbeldrank_e2)->days;
// DIG
	$uDubbeldrank_s3 = new DateTime("2012-12-20");
	$uDubbeldrank_e3 = new DateTime();
	$uDubbeldrank_i3 = $uDubbeldrank_s3->diff($uDubbeldrank_e3)->days;
// Totaal			
	$uDubbeldrank_s = new DateTime("2009-11-29");
	$uDubbeldrank_e = new DateTime();
	$uDubbeldrank_i = $uDubbeldrank_s->diff($uDubbeldrank_e)->days;		
	$uDubbeldrank_total = $uDubbeldrank_i1 + $uDubbeldrank_i;			
// Nieuwsposter Sport
	$uDubbeldrank_fs1 = new DateTime("2002-10-02");
	$uDubbeldrank_fe1 = new DateTime("2004-02-29");
	$uDubbeldrank_fi1 = $uDubbeldrank_fs1->diff($uDubbeldrank_fe1)->days;
// Site Admin Sport
	$uDubbeldrank_fs2 = new DateTime("2004-02-23");
	$uDubbeldrank_fe2 = new DateTime("2005-09-05");
	$uDubbeldrank_fi2 = $uDubbeldrank_fs2->diff($uDubbeldrank_fe2)-> days;
// Site Admin Sport
	$uDubbeldrank_fs3 = new DateTime("2006-10-25");
	$uDubbeldrank_fe3 = new DateTime("2007-05-19");
	$uDubbeldrank_fi3 = $uDubbeldrank_fs3->diff($uDubbeldrank_fe3)->days;



/////////////
// Fendy ///
///////////
// UVT
	$uFendy_s1 = new DateTime("2010-09-15");
	$uFendy_e1 = new DateTime();
	$uFendy_i1 = $uFendy_s1->diff($uFendy_e1)->days;
// Totaal
	$uFendy_total = $uFendy_i1;



//////////////
// Ferdo  ///
////////////
// VKZ
	$uFerdo_s1 = new DateTime("2010-05-13");
	$uFerdo_e1 = new DateTime("2010-10-15");
	$uFerdo_i1 = $uFerdo_s1->diff($uFerdo_e1)->days;
// VKZ
	$uFerdo_s2 = new DateTime("2012-04-22");
	$uFerdo_e2 = new DateTime("2012-11-13");
	$uFerdo_i2 = $uFerdo_s2->diff($uFerdo_e2)->days;
// Total
	$uFerdo_total = $uFerdo_i1 + $uFerdo_i2;
// Redactie FP
	$uFerdo_fs1 = new DateTime("2004-11-25");
	$uFerdo_fe1 = new DateTime("2005-11-26");
	$uFerdo_fi1 = $uFerdo_fs1->diff($uFerdo_fe1)->days;
// Coordinator Moderaties FP
	$uFerdo_fs2 = new DateTime("2005-11-25");
	$uFerdo_fe2 = new DateTime("2006-09-20");
	$uFerdo_fi2 = $uFerdo_fs2->diff($uFerdo_fe2)->days;
// Redactie FP
	$uFerdo_fs3 = new DateTime("2006-09-19");
	$uFerdo_fe3 = new DateTime("2007-04-03");
	$uFerdo_fi3 = $uFerdo_fs3->diff($uFerdo_fe3)->days;
// Eindredactie FP
	$uFerdo_fs4 = new DateTime("2007-04-02");
	$uFerdo_fe4 = new DateTime("2011-08-11");
	$uFerdo_fi4 = $uFerdo_fs4->diff($uFerdo_fe4)->days;
// Eindredactie FP
	$uFerdo_fs5 = new DateTime("2012-02-20");
	$uFerdo_fe5 = new DateTime("2013-09-01");
	$uFerdo_fi5 = $uFerdo_fs5->diff($uFerdo_fe5)->days;

	

/////////////////////
// Five_Horizons  //
///////////////////
// WGR
	$uFive_Horizons_s1 = new DateTime("2005-07-18");
	$uFive_Horizons_e1 = new DateTime();
	$uFive_Horizons_i1 = $uFive_Horizons_s1->diff($uFive_Horizons_e1)->days;
// OUD
	$uFive_Horizons_s2 = new DateTime("2007-11-22");
	$uFive_Horizons_e2 = new DateTime("2008-06-10");
	$uFive_Horizons_i2 = $uFive_Horizons_s2->diff($uFive_Horizons_e2)->days;
// FLU
	$uFive_Horizons_s3 = new DateTime("2009-07-27");
	$uFive_Horizons_e3 = new DateTime("2010-01-03");
	$uFive_Horizons_i3 = $uFive_Horizons_s3->diff($uFive_Horizons_e3)->days;
// Totaal
	$uFive_Horizons_total = $uFive_Horizons_i1 ;
	
	
	
//////////////
// Fopje  ///
////////////
// ONZ
	$uFopje_s1 = new DateTime("2013-01-15");
	$uFopje_e1 = new DateTime();
	$uFopje_i1 = $uFopje_s1->diff($uFopje_e1)->days;
// GC
	$uFopje_s2 = new DateTime("2013-04-04");
	$uFopje_e2 = new DateTime();
	$uFopje_i2 = $uFopje_s2->diff($uFopje_e2)->days;
// Totaal
	$uFopje_total = $uFopje_i1;
	

	
////////////////////
// Frank_Drebin  //
//////////////////
// KLB
	$uFrank_Drebin_s1 = new DateTime("2012-07-28");
	$uFrank_Drebin_e1 = new DateTime();
	$uFrank_Drebin_i1 = $uFrank_Drebin_s1->diff($uFrank_Drebin_e1)->days;
// Totaal
	$uFrank_Drebin_total = $uFrank_Drebin_i1 ;

	
	
//////////////
// Friek_  //
////////////
// F&L
	$uFriek__s1 = new DateTime("2010-08-29");
	$uFriek__e1 = new DateTime("2013-07-22");
	$uFriek__i1 = $uFriek__s1->diff($uFriek__e1)->days;
// W&T
	$uFriek__s2 = new DateTime("2010-08-29");
	$uFriek__e2 = new DateTime("2013-07-22");
	$uFriek__i2 = $uFriek__s2->diff($uFriek__e2)->days;
// Totaal
	$uFriek__total = $uFriek__i1 ;



///////////////
// Frutsel ///
/////////////
// WKN
	$uFrutsel_s1 = new DateTime("2006-12-29");
	$uFrutsel_e1 = new DateTime();
	$uFrutsel_i1 = $uFrutsel_s1->diff($uFrutsel_e1)->days;
// NWS
	$uFrutsel_s2 = new DateTime("2008-12-08");
	$uFrutsel_e2 = new DateTime();
	$uFrutsel_i2 = $uFrutsel_s2->diff($uFrutsel_e2)->days;
// Totaal
	$uFrutsel_total = $uFrutsel_i1;



////////////
// GGMM ///
//////////
// IND
	$uGGMM_s1 = new DateTime("2011-04-18");
	$uGGMM_e1 = new DateTime("2011-07-03");
	$uGGMM_i1 = $uGGMM_s1->diff($uGGMM_e1)->days;
// KLB
	$uGGMM_s2 = new DateTime("2011-06-19");
	$uGGMM_e2 = new DateTime("2012-07-29");
	$uGGMM_i2 = $uGGMM_s2->diff($uGGMM_e2)->days;
// ZOM
	$uGGMM_s3 = new DateTime("2011-07-10");
	$uGGMM_e3 = new DateTime("2011-08-14");
	$uGGMM_i3 = $uGGMM_s3->diff($uGGMM_e3)->days;
// VBL
	$uGGMM_s4 = new DateTime("2011-11-06");
	$uGGMM_e4 = new DateTime("2013-05-26");
	$uGGMM_i4 = $uGGMM_s4->diff($uGGMM_e4)->days;
// EK 2012
	$uGGMM_s5 = new DateTime("2012-03-31");
	$uGGMM_e5 = new DateTime("2012-07-27");
	$uGGMM_i5 = $uGGMM_s5->diff($uGGMM_e5)->days;
// VBL
	$uGGMM_s6 = new DateTime("2013-08-03");
	$uGGMM_e6 = new DateTime();
	$uGGMM_i6 = $uGGMM_s6->diff($uGGMM_e6)->days;
// Totaal
	$uGGMM_p1s = new DateTime("2011-04-18");
	$uGGMM_p1e = new DateTime("2013-05-26");
	$uGGMM_p1i = $uGGMM_p1s->diff($uGGMM_p1e)->days;
	$uGGMM_total =  $uGGMM_p1i + $uGGMM_i6;
	


//////////////
// HeaN82 ///
////////////
// ONZ
	$uHeaN82_s1 = new DateTime("2013-05-30");
	$uHeaN82_e1 = new DateTime();
	$uHeaN82_i1 = $uHeaN82_s1->diff($uHeaN82_e1)->days;
// Totaal
	$uHeaN82_total = $uHeaN82_i1;



///////////////
// HeatWave //
/////////////
// GC
$uHeatWave_s1 = new DateTime("2003-10-13");
$uHeatWave_e1 = new DateTime();
$uHeatWave_i1 = $uHeatWave_s1->diff($uHeatWave_e1)->days;
// ROL
$uHeatWave_s2 = new DateTime("2011-10-03");
$uHeatWave_e2 = new DateTime("2011-10-20");
$uHeatWave_i2 = $uHeatWave_s2->diff($uHeatWave_e2)->days;
// Totaal
$uHeatWave_total = $uHeatWave_i1;


////////////////////
// HetKlusKonijn //
//////////////////
// F&F
	$uHetKlusKonijn_s1 = new DateTime("2013-07-09");
	$uHetKlusKonijn_e1 = new DateTime();
	$uHetKlusKonijn_i1 = $uHetKlusKonijn_s1->diff($uHetKlusKonijn_e1)->days;
//Totaal
	$uHetKlusKonijn_total =   $uHetKlusKonijn_i1;
	
	
	
//////////////
// Hexagon //
////////////
// POL
	$uHexagon_s1 = new DateTime("2013-07-01");
	$uHexagon_e1 = new DateTime();
	$uHexagon_i1 = $uHexagon_s1->diff($uHexagon_e1)->days;
//Totaal
	$uHexagon_total =   $uHexagon_i1;
	
	
	
//////////////
// Houniet //
////////////
// UVT
	$uHouniet_s1 = new DateTime("2007-10-13");
	$uHouniet_e1 = new DateTime("2008-02-28");
	$uHouniet_i1 = $uHouniet_s1->diff($uHouniet_e1)->days;
// UVT
	$uHouniet_s2 = new DateTime("2008-03-05");
	$uHouniet_e2 = new DateTime("");
	$uHouniet_i2 = $uHouniet_s2->diff($uHouniet_e2)->days;
// Totaal
	$uHouniet_total = $uHouniet_i1 + $uHouniet_i2;



/////////////
// iBenny //
///////////
// TAL
	$uiBenny_s1 = new DateTime("2010-06-21");
	$uiBenny_e1 = new DateTime();
	$uiBenny_i1 = $uiBenny_s1->diff($uiBenny_e1)->days;
// Totaal
	$uiBenny_total =  $uiBenny_i1;					
// Redactie FP
	$uiBenny_fs1 = new DateTime("2012-08-01");
	$uiBenny_fe1 = new DateTime();
	$uiBenny_fi1 = $uiBenny_fs1->diff($uiBenny_fe1)->days;



///////////
// IHVK //
/////////
// C&H
	$uIHVK_s1 = new DateTime("2008-12-15");
	$uIHVK_e1 = new DateTime("2010-06-18");
	$uIHVK_i1 = $uIHVK_s1->diff($uIHVK_e1)->days;
// Totaal
	$uIHVK_total =  $uIHVK_i1;	

	

/////////////
// JDude ///
///////////
// SES
	$uJDude_s1 = new DateTime("2005-06-13");
	$uJDude_e1 = new DateTime("2006-01-04");
	$uJDude_i1 = $uJDude_s1->diff($uJDude_e1)->days;
// Totaal
	$uJDude_total = $uJDude_i1;

	
	
///////////////
// jitzzzze //
/////////////
// DEF
	$ujitzzzze_s1 = new DateTime("2013-07-22");
	$ujitzzzze_e1 = new DateTime();
	$ujitzzzze_i1 = $ujitzzzze_s1->diff($ujitzzzze_e1)->days;
// Totaal
	$ujitzzzze_total =  $ujitzzzze_i1;	
	
	

////////////
// Kaas- //
//////////
// AEX
	$uKaas_s1 = new DateTime("2012-04-11");
	$uKaas_e1 = new DateTime();
	$uKaas_i1 = $uKaas_s1->diff($uKaas_e1)->days;
//Totaal
	$uKaas_total =   $uKaas_i1;


	
/////////////////
// kanovinnie //		
///////////////
// GC
	$ukanovinnie_s1 = new DateTime("2011-01-14");
	$ukanovinnie_e1 = new DateTime();
	$ukanovinnie_i1 = $ukanovinnie_s1->diff($ukanovinnie_e1)->days;
// Totaal
	$ukanovinnie_total =  $ukanovinnie_i1;
// FOK!fotograaf
	$ukanovinnie_fs1 = new DateTime("2011-07-19");
	$ukanovinnie_fe1 = new DateTime();
	$ukanovinnie_fi1 = $ukanovinnie_fs1->diff($ukanovinnie_fe1)->days;



/////////////
// Karina //		
///////////
// 40+
	$uKarina_s1 = new DateTime("2011-07-11");
	$uKarina_e1 = new DateTime();
	$uKarina_i1 = $uKarina_s1->diff($uKarina_e1)->days;
// TAL
	$uKarina_s2 = new DateTime("2011-08-13");
	$uKarina_e2 = new DateTime();
	$uKarina_i2 = $uKarina_s2->diff($uKarina_e2)->days;
// EK 2012
	$uKarina_s3 = new DateTime("2012-03-31");
	$uKarina_e3= new DateTime("2012-07-27");
	$uKarina_i3 = $uKarina_s3->diff($uKarina_e3)->days;
// Totaal
	$uKarina_total =  $uKarina_i1;

	
/////////////////
// Lavenderr //
///////////////
// BNW
	$uLavenderr_s1 = new DateTime("2009-12-17");
	$uLavenderr_e1 = new DateTime("2011-06-17");
	$uLavenderr_i1 = $uLavenderr_s1->diff($uLavenderr_e1)->days;
//VKZ
	$uLavenderr_s2 = new DateTime("2010-03-01");
	$uLavenderr_e2 = new DateTime("2010-10-15");
	$uLavenderr_i2 = $uLavenderr_s2->diff($uLavenderr_e2)->days;
// TRU
	$uLavenderr_s3 = new DateTime("2010-08-02");
	$uLavenderr_e3 = new DateTime("2011-06-17");
	$uLavenderr_i3 = $uLavenderr_s3->diff($uLavenderr_e3)->days;
// BNW
	$uLavenderr_s4 = new DateTime("2012-06-12");
	$uLavenderr_e4 = new DateTime();
	$uLavenderr_i4 = $uLavenderr_s4->diff($uLavenderr_e4)->days;
// RLS
	$uLavenderr_s5 = new DateTime("2013-04-04");
	$uLavenderr_e5 = new DateTime("2013-06-14");
	$uLavenderr_i5 = $uLavenderr_s5->diff($uLavenderr_e5)->days;
// Totaal
	$uLavenderr_total = $uLavenderr_i1 + $uLavenderr_i4;


	
///////////////////
// LethalNinja  //
/////////////////
// KLB
	$uLethalNinja_s1 = new DateTime("2013-02-11");
	$uLethalNinja_e1 = new DateTime();
	$uLethalNinja_i1 = $uLethalNinja_s1->diff($uLethalNinja_e1)->days;
// Totaal
	$uLethalNinja_total = $uLethalNinja_i1 ;
	
	
	
/////////////////
// liesje1979 //
///////////////
// SEX
	$uliesje1979_s1 = new DateTime("2010-03-14");
	$uliesje1979_e1 = new DateTime("2010-10-28");
	$uliesje1979_i1 = $uliesje1979_s1->diff($uliesje1979_e1)->days;
// FHF
	$uliesje1979_s2 = new DateTime("2010-10-27");
	$uliesje1979_e2 = new DateTime();
	$uliesje1979_i2 = $uliesje1979_s2->diff($uliesje1979_e2)->days;
// Totaal
	$uliesje1979_s = new DateTime("2010-03-14");
	$uliesje1979_e = new DateTime();
	$uliesje1979_i =  $uliesje1979_s->diff($uliesje1979_e)->days;
	$uliesje1979_total = $uliesje1979_i;
		

	
////////////////////
// LittleBrownie //
//////////////////
// JNG
	$uLittleBrownie_s1 = new DateTime("2013-04-20");
	$uLittleBrownie_e1 = new DateTime("2013-08-05");
	$uLittleBrownie_i1 = $uLittleBrownie_s1->diff($uLittleBrownie_e1)->days;
// CRE
	$uLittleBrownie_s2 = new DateTime("2013-08-04");
	$uLittleBrownie_e2 = new DateTime();
	$uLittleBrownie_i2 = $uLittleBrownie_s2->diff($uLittleBrownie_e2)->days;
//Totaal
	$uLittleBrownie_s = new DateTime("2013-04-20");
	$uLittleBrownie_e = new DateTime();
	$uLittleBrownie_i = $uLittleBrownie_s->diff($uLittleBrownie_e)->days;
	$uLittleBrownie_total = $uLittleBrownie_i;
	


////////////
// Lois ///
//////////	
// LIF
	$uLois_s1 = new DateTime("2000-03-01");
	$uLois_e1 = new DateTime("2003-06-04");
	$uLois_i1 = $uLois_s1->diff($uLois_e1)->days;
// OUD
	$uLois_s2 = new DateTime("2003-04-19");
	$uLois_e2 = new DateTime();
	$uLois_i2 = $uLois_s2->diff($uLois_e2)->days;
// Totaal
	$uLois_s = new DateTime("2000-03-01");
	$uLois_e = new DateTime();
	$uLois_i = $uLois_s->diff($uLois_e)->days;
	$uLois_total = $uLois_i;



////////////////
// LompeHork //
//////////////
// ROO
	$uLompeHork_s1 = new DateTime("2011-10-22");
	$uLompeHork_e1 = new DateTime("2012-01-01");
	$uLompeHork_i1 = $uLompeHork_s1->diff($uLompeHork_e1)->days;
// DIG
	$uLompeHork_s2 = new DateTime("2011-12-16");
	$uLompeHork_e2 = new DateTime("2012-07-18");
	$uLompeHork_i2 = $uLompeHork_s2->diff($uLompeHork_e2)->days;
// ONZ
	$uLompeHork_s3 = new DateTime("2012-07-17");
	$uLompeHork_e3 = new DateTime();
	$uLompeHork_i3 = $uLompeHork_s3->diff($uLompeHork_e3)->days;
// Totaal
	$uLompeHork_s = new DateTime("2011-10-22");
	$uLompeHork_e = new DateTime();
	$uLompeHork_i = $uLompeHork_s->diff($uLompeHork_e)->days;
	$uLompeHork_total = $uLompeHork_i;
// Designer
	$uLompeHork_fs1 = new DateTime("2012-01-25");
	$uLompeHork_fe1 = new DateTime();
	$uLompeHork_fi1 = $uLompeHork_fs1->diff($uLompeHork_fe1)->days;
// Redactie FP
	$uLompeHork_fs2 = new DateTime("2012-07-30");
	$uLompeHork_fe2 = new DateTime("2013-08-13");
	$uLompeHork_fi2 = $uLompeHork_fs2->diff($uLompeHork_fe2)->days;
// Eindredactie FP
	$uLompeHork_fs3 = new DateTime("2013-08-12");
	$uLompeHork_fe3 = new DateTime();
	$uLompeHork_fi3 = $uLompeHork_fs3->diff($uLompeHork_fe3)->days;

	
	
//////////////
// Lotusss //
////////////	
// DEF
	$uLotusss_s1 = new DateTime("2010-11-07");
	$uLotusss_e1 = new DateTime("2013-07-23");
	$uLotusss_i1 = $uLotusss_s1->diff($uLotusss_e1)->days;
// Totaal
	$uLotusss_total = $uLotusss_i1;


////////////
// Lutte //
//////////
// CRE
	$uLutte_s1 = new DateTime("2011-01-03");
	$uLutte_e1 = new DateTime("2013-08-05");
	$uLutte_i1= $uLutte_s1->diff($uLutte_e1)->days;
// TDF 2012
	$uLutte_s2 = new DateTime("2012-06-19");
	$uLutte_e2 = new DateTime("2012-08-01");
	$uLutte_i2 = $uLutte_s2->diff($uLutte_e2)->days;
// TDF 2013
	$uLutte_s3 = new DateTime("2013-06-09");
	$uLutte_e3 = new DateTime("2013-07-29");
	$uLutte_i3 = $uLutte_s3->diff($uLutte_e3)->days;
// Totaal
	$uLutte_total = $uLutte_i1;




//////////////
// Magneet //
////////////	
// ONZ
	$uMagneet_s1 = new DateTime("2003-12-16");
	$uMagneet_e1 = new DateTime("2004-03-22");
	$uMagneet_i1 = $uMagneet_s1->diff($uMagneet_e1)->days;
// Totaal
	$uMagneet_total = $uMagneet_i1;
// Reviewer
	$uMagneet_fs1 = new DateTime("2005-05-27");
	$uMagneet_fe1 = new DateTime("2006-12-06");
	$uMagneet_fi1 = $uMagneet_fs1->diff($uMagneet_fe1)->days;
// Reviewer
	$uMagneet_fs2 = new DateTime("2009-10-29");
	$uMagneet_fe2 = new DateTime("2011-05-16");
	$uMagneet_fi2 = $uMagneet_fs2->diff($uMagneet_fe2)->days;
// Manager Reviews
	$uMagneet_fs3 = new DateTime("2011-05-15");
	$uMagneet_fe3 = new DateTime();
	$uMagneet_fi3 = $uMagneet_fs3->diff($uMagneet_fe3)->days;	



///////////////
// Maharbal //
/////////////
// WGR
	$uMaharbal_s1 = new DateTime("2012-12-16");
	$uMaharbal_e1 = new DateTime();
	$uMaharbal_i1 = $uMaharbal_s1->diff($uMaharbal_e1)->days;
// Totaal
	$uMaharbal_total = $uMaharbal_i1;


	
//////////////
// Maisnon //
////////////	
// ONZ
	$uMaisnon_s1 = new DateTime("2007-09-17");
	$uMaisnon_e1 = new DateTime("2008-02-04");
	$uMaisnon_i1 = $uMaisnon_s1->diff($uMaisnon_e1)->days;
// EXA
	$uMaisnon_s2 = new DateTime("2012-03-25");
	$uMaisnon_e2 = new DateTime("2012-07-10");
	$uMaisnon_i2 = $uMaisnon_s2->diff($uMaisnon_e2)->days;
// EXA
	$uMaisnon_s3 = new DateTime("2013-03-31");
	$uMaisnon_e3 = new DateTime("2013-07-22");
	$uMaisnon_i3 = $uMaisnon_s3->diff($uMaisnon_e3)->days;
// Totaal
	$uMaisnon_total = $uMaisnon_i1 + $uMaisnon_i2 + $uMaisnon_i3;


	
///////////////
// Marie30  //
/////////////
// KLB
	$uMarie30_s1 = new DateTime("2013-02-01");
	$uMarie30_e1 = new DateTime();
	$uMarie30_i1 = $uMarie30_s1->diff($uMarie30_e1)->days;
// Totaal
	$uMarie30_total = $uMarie30_i1 ;
	
	
	
////////////
// Mike ///
//////////	
// TV
	$uMike_s1 = new DateTime("2002-06-20");
	$uMike_e1 = new DateTime();
	$uMike_i1 = $uMike_s1->diff($uMike_e1)->days;
// FA
	$uMike_s2 = new DateTime("2008-11-04");
	$uMike_e2 = new DateTime("2009-11-01");
	$uMike_i2 = $uMike_s2->diff($uMike_e2)->days;
// Totaal
	$uMike_total = $uMike_i1;
// Totaal MOD
	$uMike_mod = $uMike_i1;


////////////
// MissBliss ///
//////////	
// TV
	$uMissBliss_s1 = new DateTime("2009-08-04");
	$uMissBliss_e1 = new DateTime();
	$uMissBliss_i1 = $uMissBliss_s1->diff($uMissBliss_e1)->days;
// FA
	$uMissBliss_fs1 = new DateTime("2011-04-01");
	$uMissBliss_fe1 = new DateTime();
	$uMissBliss_fi1 = $uMissBliss_fs1->diff($uMissBliss_fe1)->days;
// Totaal
	$uMissBliss_total = $uMissBliss_i1;
	
	
	
////////////////
// Misstique //
//////////////
//STA
	$uMisstique_s1 = new DateTime("2006-06-19");
	$uMisstique_e1 = new DateTime();
	$uMisstique_i1 = $uMisstique_s1->diff($uMisstique_e1)->days;
// US
	$uMisstique_s2 = new DateTime("2006-08-28");
	$uMisstique_e2 = new DateTime("2006-11-22");
	$uMisstique_i2 = $uMisstique_s2->diff($uMisstique_e2)->days;
// C&H
	$uMisstique_s3 = new DateTime("2006-11-21");
	$uMisstique_e3 = new DateTime("2007-09-26");
	$uMisstique_i3 = $uMisstique_s3->diff($uMisstique_e3)->days;
// MLN
	$uMisstique_s4 = new DateTime("2007-07-16");
	$uMisstique_e4 = new DateTime("2008-11-20");
	$uMisstique_i4 = $uMisstique_s4->diff($uMisstique_e4)->days;
// INT
	$uMisstique_s5 = new DateTime("2008-03-27");
	$uMisstique_e5 = new DateTime("2008-07-10");
	$uMisstique_i5 = $uMisstique_s5->diff($uMisstique_e5)->days;
// NIN
	$uMisstique_s6 = new DateTime("2008-10-02");
	$uMisstique_e6 = new DateTime("2008-10-10");
	$uMisstique_i6 = $uMisstique_s6->diff($uMisstique_e6)->days;
// REV
	$uMisstique_s7 = new DateTime("2008-11-23");
	$uMisstique_e7 = new DateTime("2009-03-20");
	$uMisstique_i7 = $uMisstique_s7->diff($uMisstique_e7)->days;
// MO
	$uMisstique_s8 = new DateTime("2011-01-27");
	$uMisstique_e8 = new DateTime("2011-05-02");
	$uMisstique_i8 = $uMisstique_s8->diff($uMisstique_e8)->days;
// RBO
	$uMisstique_s9 = new DateTime("2012-01-15");
	$uMisstique_e9 = new DateTime("2012-01-20");
	$uMisstique_i9 = $uMisstique_s9->diff($uMisstique_e9)->days;
// KAA
	$uMisstique_s10 = new DateTime("2012-10-15");
	$uMisstique_e10 = new DateTime("2013-06-24");
	$uMisstique_i10 = $uMisstique_s10->diff($uMisstique_e10)->days;
// Totaal
	$uMisstique_total = $uMisstique_i1;
// PR
	$uMisstique_fs1 = new DateTime("2008-11-28");
	$uMisstique_fe1 = new DateTime("2009-03-20");
	$uMisstique_fi1 = $uMisstique_fs1->diff($uMisstique_fe1)->days;
// PR (II)
	$uMisstique_fs2 = new DateTime("2013-11-07");
	$uMisstique_fe2 = new DateTime();
	$uMisstique_fi2 = $uMisstique_fs2->diff($uMisstique_fe2)->days;



//////////////
// Ml-etje //
////////////
// K&W
	$uMletje_s1 = new DateTime("2010-03-27");
	$uMletje_e1 = new DateTime("");
	$uMletje_i1 = $uMletje_s1->diff($uMletje_e1)->days;
//Totaal
	$uMletje_total =   $uMletje_i1;


	
///////////////
// Mortaxx  //
/////////////
// KLB
	$uMortaxx_s1 = new DateTime("2013-02-01");
	$uMortaxx_e1 = new DateTime();
	$uMortaxx_i1 = $uMortaxx_s1->diff($uMortaxx_e1)->days;
// Totaal
	$uMortaxx_total = $uMortaxx_i1 ;
	
	
	
////////////////////
// motorbloempje //
//////////////////
// SES
	$umotorbloempje_s1 = new DateTime("2009-11-01");
	$umotorbloempje_e1 = new DateTime();
	$umotorbloempje_i1 = $umotorbloempje_s1->diff($umotorbloempje_e1)->days;
// EXA
	$umotorbloempje_s2 = new DateTime("2010-03-26");
	$umotorbloempje_e2 = new DateTime("2010-07-13");
	$umotorbloempje_i2 = $umotorbloempje_s2->diff($umotorbloempje_e2)->days;
// EXA
	$umotorbloempje_s3 = new DateTime("2011-03-27");
	$umotorbloempje_e3 = new DateTime("2011-07-18");
	$umotorbloempje_i3 = $umotorbloempje_s3->diff($umotorbloempje_e3)->days;
// EXA
	$umotorbloempje_s4 = new DateTime("2012-03-25");
	$umotorbloempje_e4 = new DateTime("2012-07-10");
	$umotorbloempje_i4 = $umotorbloempje_s4->diff($umotorbloempje_e4)->days;
// R&P
	$umotorbloempje_s5 = new DateTime("2012-08-01");
	$umotorbloempje_e5 = new DateTime();
	$umotorbloempje_i5 = $umotorbloempje_s5->diff($umotorbloempje_e5)->days;
// Totaal
	$umotorbloempje_total = $umotorbloempje_i1;
	
	
	
///////////
// murp //
/////////
// ONZ
	$umurp_s1 = new DateTime("2007-10-19");
	$umurp_e1 = new DateTime("2012-02-26");
	$umurp_i1 = $umurp_s1->diff($umurp_e1)->days;
// FOT
	$umurp_s2 = new DateTime("2012-02-25");
	$umurp_e2 = new DateTime("2013-02-12");
	$umurp_i2 = $umurp_s2->diff($umurp_e2)->days;
// ONZ
	$umurp_s3 = new DateTime("2013-01-15");
	$umurp_e3 = new DateTime("2013-09-06");
	$umurp_i3 = $umurp_s3->diff($umurp_e3)->days;
// Totaal
	$umurp_s = new DateTime("2007-10-19");
	$umurp_e = new DateTime("2013-09-06");
	$umurp_i =  $umurp_s->diff($umurp_e)->days;
	$umurp_total = $umurp_i;


	
/////////////
// Mylene //
///////////
// IDO
	$uMylene_s1 = new DateTime("2003-12-14");
	$uMylene_e1 = new DateTime("2004-06-19");
	$uMylene_i1 = $uMylene_s1->diff($uMylene_e1)->days;
// LIF
	$uMylene_s2 = new DateTime("2004-02-14");
	$uMylene_e2 = new DateTime();
	$uMylene_i2 = $uMylene_s2->diff($uMylene_e2)->days;
// Totaal
	$uMylene_s = new DateTime("2003-12-14");
	$uMylene_e = new DateTime();
	$uMylene_i = $uMylene_s->diff($uMylene_e)->days;
	$uMylene_total = $uMylene_i;

	
	
//////////////
// Natalie //
////////////
// C&H
	$uNatalie_s1 = new DateTime("2003-08-10");
	$uNatalie_e1 = new DateTime("2004-06-17");
	$uNatalie_i1 = $uNatalie_s1->diff($uNatalie_e1)->days;
// C&H
	$uNatalie_s2 = new DateTime("2005-03-15");
	$uNatalie_e2 = new DateTime("2005-07-19");
	$uNatalie_i2 = $uNatalie_s2->diff($uNatalie_e2)->days;
// Forum Admin
	$uNatalie_s3 = new DateTime("2005-06-22");
	$uNatalie_e3 = new DateTime("2006-02-13");
	$uNatalie_i3 = $uNatalie_s3->diff($uNatalie_e3)->days;
// C&H
	$uNatalie_s4 = new DateTime("2006-06-11");
	$uNatalie_e4 = new DateTime("2006-11-15");
	$uNatalie_i4 = $uNatalie_s4->diff($uNatalie_e4)->days;
// FEE
	$uNatalie_s5 = new DateTime("2006-10-24");
	$uNatalie_e5 = new DateTime("2006-11-15");
	$uNatalie_i5 = $uNatalie_s5->diff($uNatalie_e5)->days;
// FEE
	$uNatalie_s6 = new DateTime("2012-10-28");
	$uNatalie_e6 = new DateTime("2013-01-06");
	$uNatalie_i6 = $uNatalie_s6->diff($uNatalie_e6)->days;
// TRU
	$uNatalie_s7 = new DateTime("2012-12-18");
	$uNatalie_e7 = new DateTime();
	$uNatalie_i7 = $uNatalie_s7->diff($uNatalie_e7)->days;
// Totaal
	// Unique i2 + i3
	$uNatalie_p1s = new DateTime("2005-03-15");
	$uNatalie_p1e = new DateTime("2006-02-13");
	$uNatalie_p1i = $uNatalie_p1s->diff($uNatalie_p1e)->days;
	// Unique i6 + i7
	$uNatalie_p2s = new DateTime("2012-10-28");
	$uNatalie_p2e = new DateTime();
	$uNatalie_p2i = $uNatalie_p2s->diff($uNatalie_p2e)->days;
	$uNatalie_total = $uNatalie_i1 + $uNatalie_p1i + $uNatalie_i4 + $uNatalie_p2i;


	
//////////////
// Nibb-it //
////////////
// C&H
	$uNibbit_s1 = new DateTime("2012-05-08");
	$uNibbit_e1 = new DateTime();
	$uNibbit_i1 = $uNibbit_s1->diff($uNibbit_e1)->days;
// Totaal
	$uNibbit_total = $uNibbit_i1;



//////////////
// NJ //
////////////
// ONZ
	$uNJ_s1 = new DateTime("2005-07-12");
	$uNJ_e1 = new DateTime("2007-05-18");
	$uNJ_i1 = $uNJ_s1->diff($uNJ_e1)->days;
// FA
	$uNJ_s2 = new DateTime("2006-10-26");
	$uNJ_e2 = new DateTime("2008-09-02");
	$uNJ_i2 = $uNJ_s2->diff($uNJ_e2)->days;
// ONZ
	$uNJ_s3 = new DateTime("2009-01-14");
	$uNJ_e3 = new DateTime("2009-02-20");
	$uNJ_i3 = $uNJ_s3->diff($uNJ_e3)->days;
// FA
	$uNJ_s4 = new DateTime("2009-02-19");
	$uNJ_e4 = new DateTime("2012-02-05");
	$uNJ_i4 = $uNJ_s4->diff($uNJ_e4)->days;
// Totaal crew
	$uNJ_s = new DateTime("2005-07-12");
	$uNJ_e = new DateTime("2008-09-02");
	$uNJ_i = $uNJ_s->diff($uNJ_e)->days; // 1 + 2
	$uNJ_ss = new DateTime("2009-01-14");
	$uNJ_ee = new DateTime("2012-02-05");
	$uNJ_ii = $uNJ_ss->diff($uNJ_ee)->days; // 3 + 4
	$uNJ_total = $uNJ_i + $uNJ_ii;
// Totaal FA
	$uNJ_FA = $uNJ_i2 + $uNJ_i4;
// Totaal MOD
	$uNJ_mod = $uNJ_i1 + $uNJ_i3;
// Nieuwsposter Sport
	$uNJ_fs1 = new DateTime("2005-12-13");
	$uNJ_fe1 = new DateTime("2006-10-16");
	$uNJ_fi1 = $uNJ_fs1->diff($uNJ_fe1)->days;



//////////////
// Oerbeer //
////////////
// ONZ
	$uOerbeer_s1 = new DateTime("2011-10-04");
	$uOerbeer_e1 = new DateTime("2013-05-31");
	$uOerbeer_i1 = $uOerbeer_s1->diff($uOerbeer_e1)->days;
// SER 2011
	$uOerbeer_s2 = new DateTime("2011-12-16");
	$uOerbeer_e2 = new DateTime("2012-01-02");
	$uOerbeer_i2 = $uOerbeer_s2->diff($uOerbeer_e2)->days;
// FVZ
	$uOerbeer_s3 = new DateTime("2012-07-28");
	$uOerbeer_e3 = new DateTime("2012-09-19");
	$uOerbeer_i3 = $uOerbeer_s3->diff($uOerbeer_e3)->days;
// SER 2012
	$uOerbeer_s4 = new DateTime("2012-12-17");
	$uOerbeer_e4 = new DateTime("2012-12-31");
	$uOerbeer_i4 = $uOerbeer_s4->diff($uOerbeer_e4)->days;
// US
	$uOerbeer_s5 = new DateTime("2013-05-30");
	$uOerbeer_e5 = new DateTime();
	$uOerbeer_i5 = $uOerbeer_s5->diff($uOerbeer_e5)->days;
// Totaal
	$uOerbeer_s = new DateTime("2011-10-04");
	$uOerbeer_e = new DateTime();
	$uOerbeer_i = $uOerbeer_s->diff($uOerbeer_e)->days;
	$uOerbeer_total = $uOerbeer_i;
// Designer
	$uOerbeer_fs1 = new DateTime("2012-07-10");
	$uOerbeer_fe1 = new DateTime("2013-04-05");
	$uOerbeer_fi1 = $uOerbeer_fs1->diff($uOerbeer_fe1)->days;
// Redactie FP
	$uOerbeer_fs2 = new DateTime("2012-08-01");
	$uOerbeer_fe2 = new DateTime();
	$uOerbeer_fi2 = $uOerbeer_fs2->diff($uOerbeer_fe2)->days;	
	
	
//////////
// Ole //
////////
// SHO
	$uOle_s1 = new DateTime("2011-03-20");
	$uOle_e1 = new DateTime();
	$uOle_i1 = $uOle_s1->diff($uOle_e1)->days;
// B&H
	$uOle_s2 = new DateTime("2011-06-14");
	$uOle_e2 = new DateTime();
	$uOle_i2 = $uOle_s2->diff($uOle_e2)->days;
// Totaal
	$uOle_total = $uOle_i1;



/////////////////////
// Opa.Bakkebaard //
///////////////////
// KLB
	$uOpaBakkebaard_s1 = new DateTime("2010-09-14");
	$uOpaBakkebaard_e1 = new DateTime("2011-12-09");
	$uOpaBakkebaard_i1 = $uOpaBakkebaard_s1->diff($uOpaBakkebaard_e1)->days;
// ONZ
	$uOpaBakkebaard_s2 = new DateTime("2010-10-29");
	$uOpaBakkebaard_e2 = new DateTime("2011-11-20");
	$uOpaBakkebaard_i2 = $uOpaBakkebaard_s2->diff($uOpaBakkebaard_e2)->days;
// DIG
	$uOpaBakkebaard_s3 = new DateTime("2011-11-19");
	$uOpaBakkebaard_e3 = new DateTime("2011-12-17");
	$uOpaBakkebaard_i3 = $uOpaBakkebaard_s3->diff($uOpaBakkebaard_e3)->days;
// FA
	$uOpaBakkebaard_s4 = new DateTime("2011-12-08");
	$uOpaBakkebaard_e4 = new DateTime();
	$uOpaBakkebaard_i4 = $uOpaBakkebaard_s4->diff($uOpaBakkebaard_e4)->days;
// Totaal
	$uOpaBakkebaard_s = new DateTime("2010-09-14");
	$uOpaBakkebaard_e = new DateTime();
	$uOpaBakkebaard_i = $uOpaBakkebaard_s->diff($uOpaBakkebaard_e)->days;
	$uOpaBakkebaard_total = $uOpaBakkebaard_i;
// Totaal mod
	$uOpaBakkebaard_sm = new DateTime("2010-09-14");
	$uOpaBakkebaard_em = new DateTime("2012-12-17");
	$uOpaBakkebaard_im = $uOpaBakkebaard_sm->diff($uOpaBakkebaard_em)->days;
	$uOpaBakkebaard_mod = $uOpaBakkebaard_im;
		
	

////////////
// paddy //
//////////
// NWS
	$upaddy_s1 = new DateTime("2007-07-14");
	$upaddy_e1 = new DateTime();
	$upaddy_i1 = $upaddy_s1->diff($upaddy_e1)->days;
// Totaal
	$upaddy_total = $upaddy_i1;
// Redactie FP
	$upaddy_fs1 = new DateTime("2006-04-15");
	$upaddy_fe1 = new DateTime();
	$upaddy_fi1 = $upaddy_fs1->diff($upaddy_fe1)->days;



//////////////
// Pharkus //
////////////
// KLB
	$uPharkus_s1 = new DateTime("2011-11-13");
	$uPharkus_e1 = new DateTime();
	$uPharkus_i1 = $uPharkus_s1->diff($uPharkus_e1)->days;
// Forum Admin
	$uPharkus_s2 = new DateTime("2013-07-19");
	$uPharkus_e2 = new DateTime();
	$uPharkus_i2 = $uPharkus_s2->diff($uPharkus_e2)->days;
// Totaal
	$uPharkus_total = $uPharkus_i1;

	
	
////////////
// Puala //
//////////
// FOT
	$uPuala_s1 = new DateTime("2013-04-24");
	$uPuala_e1 = new DateTime();
	$uPuala_i1 = $uPuala_s1->diff($uPuala_e1)->days;
// Totaal
	$uPuala_total = $uPuala_i1;



/////////
// Re //
///////
// R&P
	$uRe_s1 = new DateTime("2008-03-01");
	$uRe_e1 = new DateTime("2012-06-26");
	$uRe_i1 = $uRe_s1->diff($uRe_e1)->days;
// US
	$uRe_s2 = new DateTime("2009-01-10");
	$uRe_e2 = new DateTime("2009-09-27");
	$uRe_i2 = $uRe_s2->diff($uRe_e2)->days;
// FLU
	$uRe_s3 = new DateTime("2009-07-26");
	$uRe_e3 = new DateTime("2010-01-03");
	$uRe_i3 = $uRe_s3->diff($uRe_e3)->days;
// R&P
	$uRe_s4 = new DateTime("2012-08-01");
	$uRe_e4 = new DateTime();
	$uRe_i4 = $uRe_s4->diff($uRe_e4)->days;
// Totaal
	$uRe_total =  $uRe_i1 + $uRe_i4;
				
				

///////////////
// Renesite //
/////////////
// SES
	$uRenesite_s1 = new DateTime("2005-09-18");
	$uRenesite_e1 = new DateTime("2007-01-16");
	$uRenesite_i1 = $uRenesite_s1->diff($uRenesite_e1)->days;
// PUB
	$uRenesite_s2 = new DateTime("2006-02-13");
	$uRenesite_e2 = new DateTime("2006-04-07");
	$uRenesite_i2 = $uRenesite_s2->diff($uRenesite_e2)->days;
// EXA
	$uRenesite_s3 = new DateTime("2007-04-01");
	$uRenesite_e3 = new DateTime("2007-07-01");
	$uRenesite_i3 = $uRenesite_s3->diff($uRenesite_e3)->days;
// SES
	$uRenesite_s4 = new DateTime("2009-01-09");
	$uRenesite_e4 = new DateTime("2011-11-29");
	$uRenesite_i4 = $uRenesite_s4->diff($uRenesite_e4)->days;
// V&A
	$uRenesite_s5 = new DateTime("2011-11-22");
	$uRenesite_e5 = new DateTime("2013-02-05");
	$uRenesite_i5 = $uRenesite_s5->diff($uRenesite_e5)->days;
// Totaal
	$uRenesite_s = new DateTime("2009-01-09");
	$uRenesite_e = new DateTime("2013-02-05");
	$uRenesite_i = $uRenesite_s->diff($uRenesite_e)->days;
	$uRenesite_total = $uRenesite_i1 + $uRenesite_i3 + $uRenesite_i;

	

/////////////
// rene90 //
///////////
// V&A
	$urene90_s1 = new DateTime("2008-10-04");
	$urene90_e1 = new DateTime("2010-02-22");
	$urene90_i1 = $urene90_s1->diff($urene90_e1)->days;
// V&A
	$urene90_s2 = new DateTime("2011-10-10");
	$urene90_e2 = new DateTime();
	$urene90_i2 = $urene90_s2->diff($urene90_e2)->days;
// Totaal
	$urene90_total = $urene90_i1 + $urene90_i2;

	
	
/////////////////
// RockabeIIa //
///////////////
// OUD
	$uRockabeIIa_s1 = new DateTime("2009-02-23");
	$uRockabeIIa_e1 = new DateTime();
	$uRockabeIIa_i1 = $uRockabeIIa_s1->diff($uRockabeIIa_e1)->days;
// CRE
	$uRockabeIIa_s2 = new DateTime("2011-09-13");
	$uRockabeIIa_e2 = new DateTime();
	$uRockabeIIa_i2 = $uRockabeIIa_s2->diff($uRockabeIIa_e2)->days;
// Totaal
	$uRockabeIIa_total = $uRockabeIIa_i1;
	
	

/////////////////
// rubbereend //
///////////////
// VBL
	$urubbereend_s1 = new DateTime("2005-11-01");
	$urubbereend_e1 = new DateTime("2006-08-13");
	$urubbereend_i1 = $urubbereend_s1->diff($urubbereend_e1)->days;
// VBL
	$urubbereend_s2 = new DateTime("2007-01-02");
	$urubbereend_e2 = new DateTime("2008-01-12");
	$urubbereend_i2 = $urubbereend_s2->diff($urubbereend_e2)->days;
// 80S
	$urubbereend_s3 = new DateTime("2007-06-10");
	$urubbereend_e3 = new DateTime("2007-07-09");
	$urubbereend_i3 = $urubbereend_s3->diff($urubbereend_e3)->days;
// MLN
	$urubbereend_s4 = new DateTime("2008-11-19");
	$urubbereend_e4 = new DateTime();
	$urubbereend_i4 = $urubbereend_s4->diff($urubbereend_e4)->days;
// NIN
	$urubbereend_s5 = new DateTime("2010-09-23");
	$urubbereend_e5 = new DateTime("2010-10-03");
	$urubbereend_i5 = $urubbereend_s5->diff($urubbereend_e5)->days;
// NIN
	$urubbereend_s6 = new DateTime("2011-09-15");
	$urubbereend_e6 = new DateTime("2011-10-04");
	$urubbereend_i6 = $urubbereend_s6->diff($urubbereend_e6)->days;
// LWL
	$urubbereend_s7 = new DateTime("2012-06-18");
	$urubbereend_e7 = new DateTime("2012-08-27");
	$urubbereend_i7 = $urubbereend_s7->diff($urubbereend_e7)->days;
// SER
	$urubbereend_s8 = new DateTime("2011-12-16");
	$urubbereend_e8 = new DateTime("2012-01-02");
	$urubbereend_i8 = $urubbereend_s8->diff($urubbereend_e8)->days;
// SER
	$urubbereend_s9 = new DateTime("2012-12-17");
	$urubbereend_e9 = new DateTime("2012-12-31");
	$urubbereend_i9 = $urubbereend_s9->diff($urubbereend_e9)->days;
// Totaal
	$urubbereend_total = $urubbereend_i1 + $urubbereend_i2 + $urubbereend_i4;
// Nieuwsposter Sport
	$urubbereend_fs1 = new DateTime("2008-01-19");
	$urubbereend_fe1 = new DateTime("2012-02-02");
	$urubbereend_fi1 = $urubbereend_fs1->diff($urubbereend_fe1)->days;
// Eindredactie Sport
	$urubbereend_fs2 = new DateTime("2013-02-01");
	$urubbereend_fe2 = new DateTime();
	$urubbereend_fi2 = $urubbereend_fs2->diff($urubbereend_fe2)->days;


	
////////////////////
// Sack_Blabbath //
//////////////////
// MUZ
	$uSack_Blabbath_s1 = new DateTime("2008-05-27");
	$uSack_Blabbath_e1 = new DateTime("2010-04-23");
	$uSack_Blabbath_i1 = $uSack_Blabbath_s1->diff($uSack_Blabbath_e1)->days;
// LWL 2009
	$uSack_Blabbath_s2 = new DateTime("2009-06-01");
	$uSack_Blabbath_e2 = new DateTime("2009-09-14");
	$uSack_Blabbath_i2 = $uSack_Blabbath_s2->diff($uSack_Blabbath_e2)->days;
// LWL 2010
	$uSack_Blabbath_s3 = new DateTime("2010-07-06");
	$uSack_Blabbath_e3 = new DateTime("2010-09-10");
	$uSack_Blabbath_i3 = $uSack_Blabbath_s3->diff($uSack_Blabbath_e3)->days;
// FMM
	$uSack_Blabbath_s4 = new DateTime("2010-09-19");
	$uSack_Blabbath_e4 = new DateTime("2011-01-08");
	$uSack_Blabbath_i4 = $uSack_Blabbath_s4->diff($uSack_Blabbath_e4)->days;
// LWL 2011
	$uSack_Blabbath_s5 = new DateTime("2011-06-13");
	$uSack_Blabbath_e5 = new DateTime("2011-10-04");
	$uSack_Blabbath_i5 = $uSack_Blabbath_s5->diff($uSack_Blabbath_e5)->days;
// MUZ
	$uSack_Blabbath_s6 = new DateTime("2011-12-19");
	$uSack_Blabbath_e6 = new DateTime();
	$uSack_Blabbath_i6 = $uSack_Blabbath_s6->diff($uSack_Blabbath_e6)->days;
// LWL 2012
	$uSack_Blabbath_s7 = new DateTime("2012-06-18");
	$uSack_Blabbath_e7 = new DateTime("2012-08-27");
	$uSack_Blabbath_i7 = $uSack_Blabbath_s7->diff($uSack_Blabbath_e7)->days;
// LWL 2013
	$uSack_Blabbath_s8 = new DateTime("2013-07-08");
	$uSack_Blabbath_e8 = new DateTime();
	$uSack_Blabbath_i8 = $uSack_Blabbath_s8->diff($uSack_Blabbath_e8)->days;
// Totaal
	$uSack_Blabbath_total = $uSack_Blabbath_i1 + $uSack_Blabbath_i3 + $uSack_Blabbath_i4 + $uSack_Blabbath_i5 + $uSack_Blabbath_i6 ;


	
/////////////////////
// SaintOfKillers //
///////////////////
// TV
	$uSaintOfKillers_s1 = new DateTime("2005-08-30");
	$uSaintOfKillers_e1 = new DateTime();
	$uSaintOfKillers_i1 = $uSaintOfKillers_s1->diff($uSaintOfKillers_e1)->days;
// Totaal
	$uSaintOfKillers_total =  $uSaintOfKillers_i1;


	
//////////////
// senesta //
////////////
// F&F
	$usenesta_s1 = new DateTime("2006-12-21");
	$usenesta_e1 = new DateTime();
	$usenesta_i1 = $usenesta_s1->diff($usenesta_e1)->days;
// TRU
	$usenesta_s2 = new DateTime("2007-08-21");
	$usenesta_e2 = new DateTime("2008-06-19");
	$usenesta_i2 = $usenesta_s2->diff($usenesta_e2)->days;
// Totaal
	$usenesta_total = $usenesta_i1;
// PR
	$usenesta_fs1 = new DateTime("2008-03-19");
	$usenesta_fe1 = new DateTime("2008-09-11");
	$usenesta_fi1 = $usenesta_fs1->diff($usenesta_fe1)->days;
// Manager PR
	$usenesta_fs2 = new DateTime("2008-09-10");
	$usenesta_fe2 = new DateTime();
	$usenesta_fi2 = $usenesta_fs2->diff($usenesta_fe2)->days;


	
///////////
// SiIk //
/////////
// EXA
	$uSiIk_s1 = new DateTime("2013-03-31");
	$uSiIk_e1 = new DateTime("2013-07-22");
	$uSiIk_i1 = $uSiIk_s1->diff($uSiIk_e1)->days;
// Totaal
	$uSiIk_total =  $uSiIk_i1;



//////////////////////
// sitting_elfling //
////////////////////
// EXA
	$usitting_elfling_s1 = new DateTime("2012-12-03");
	$usitting_elfling_e1 = new DateTime();
	$usitting_elfling_i1 = $usitting_elfling_s1->diff($usitting_elfling_e1)->days;
// Totaal
	$usitting_elfling_total =  $usitting_elfling_i1;
	

	
////////////
// Sjeen //
/////////
// WGR
	$uSjeen_s1 = new DateTime("2005-09-08");
	$uSjeen_e1 = new DateTime();
	$uSjeen_i1 = $uSjeen_s1->diff($uSjeen_e1)->days;
// R&P
	$uSjeen_s2 = new DateTime("2007-03-15");
	$uSjeen_e2 = new DateTime("2007-07-31");
	$uSjeen_i2 = $uSjeen_s2->diff($uSjeen_e2)->days;
// FEE 2007
	$uSjeen_s3 = new DateTime("2007-10-30");
	$uSjeen_e3 = new DateTime("2008-01-06");
	$uSjeen_i3 = $uSjeen_s3->diff($uSjeen_e3)->days;
// KEL
	$uSjeen_s4 = new DateTime("2008-01-02");
	$uSjeen_e4 = new DateTime();
	$uSjeen_i4 = $uSjeen_s4->diff($uSjeen_e4)->days;
// FEE 2008
	$uSjeen_s5 = new DateTime("2008-10-30");
	$uSjeen_e5 = new DateTime("2009-01-06");
	$uSjeen_i5 = $uSjeen_s5->diff($uSjeen_e5)->days;
// FEE 2009
	$uSjeen_s6 = new DateTime("2009-10-27");
	$uSjeen_e6 = new DateTime("2010-01-06");
	$uSjeen_i6 = $uSjeen_s6->diff($uSjeen_e6)->days;
// FEE 2010
	$uSjeen_s7 = new DateTime("2010-10-11");
	$uSjeen_e7 = new DateTime("2011-01-09");
	$uSjeen_i7 = $uSjeen_s7->diff($uSjeen_e7)->days;
// FEE 2011
	$uSjeen_s8 = new DateTime("2011-10-29");
	$uSjeen_e8 = new DateTime("2012-01-06");
	$uSjeen_i8 = $uSjeen_s8->diff($uSjeen_e8)->days;
// Totaal
	$uSjeen_total =  $uSjeen_i1;	

	
	
//////////////
// shmoopy //
////////////
// R&P
	$ushmoopy_s1 = new DateTime("2002-03-10");
	$ushmoopy_e1 = new DateTime("2004-02-24");
	$ushmoopy_i1 = $ushmoopy_s1->diff($ushmoopy_e1)->days;
// LIF
	$ushmoopy_s2 = new DateTime("2003-06-03");
	$ushmoopy_e2 = new DateTime("2004-01-29");
	$ushmoopy_i2 = $ushmoopy_s2->diff($ushmoopy_e2)->days;
// CUL
	$ushmoopy_s3 = new DateTime("2004-01-22");
	$ushmoopy_e3 = new DateTime("2005-01-11");
	$ushmoopy_i3 = $ushmoopy_s3->diff($ushmoopy_e3)->days;
// FA
	$ushmoopy_s4 = new DateTime("2004-12-30");
	$ushmoopy_e4 = new DateTime();
	$ushmoopy_i4 = $ushmoopy_s4->diff($ushmoopy_e4)->days;
// DGK
	$ushmoopy_s5 = new DateTime("2006-11-05");
	$ushmoopy_e5 = new DateTime("2007-01-29");
	$ushmoopy_i5 = $ushmoopy_s5->diff($ushmoopy_e5)->days;
// Totaal
	$ushmoopy_s = new DateTime("2002-03-10");
	$ushmoopy_e = new DateTime();
	$ushmoopy_i = $ushmoopy_s->diff($ushmoopy_e)->days;
	$ushmoopy_total = $ushmoopy_i;
// Totaal mod
	$ushmoopy_sm = new DateTime("2002-03-10");
	$ushmoopy_em = new DateTime("2005-01-11");
	$ushmoopy_im = $ushmoopy_sm->diff($ushmoopy_em)->days;
	$ushmoopy_mod = $ushmoopy_im + $ushmoopy_i5;

	
//////////////
// Snakey ///
////////////
// ONZ
	$uSnakey_s1 = new DateTime("2004-11-21");
	$uSnakey_e1 = new DateTime("2004-12-10");
	$uSnakey_i1 = $uSnakey_s1->diff($uSnakey_e1)->days;
// ONZ
	$uSnakey_s2 = new DateTime("2005-09-18");
	$uSnakey_e2 = new DateTime("2008-07-14");
	$uSnakey_i2 = $uSnakey_s2->diff($uSnakey_e2)->days;
// FA
	$uSnakey_s3 = new DateTime("2008-07-13");
	$uSnakey_e3 = new DateTime();
	$uSnakey_i3 = $uSnakey_s3->diff($uSnakey_e3)->days;
// SPT
	$uSnakey_s4 = new DateTime("2012-09-16");
	$uSnakey_e4 = new DateTime();
	$uSnakey_i4 = $uSnakey_s4->diff($uSnakey_e4)->days;
// Totaal
	$uSnakey_s = new DateTime("2005-09-18");
	$uSnakey_e = new DateTime();
	$uSnakey_i = $uSnakey_s->diff($uSnakey_e)->days;
	$uSnakey_total = $uSnakey_i1 + $uSnakey_i;
// Totaal MOD
	$uSnakey_mod = $uSnakey_i1 + $uSnakey_i2 + $uSnakey_i4;

	
	
///////////////////
// Sounddragon  //
/////////////////
// PTA
	$uSounddragon_s1 = new DateTime("2010-05-08");
	$uSounddragon_e1 = new DateTime();
	$uSounddragon_i1 = $uSounddragon_s1->diff($uSounddragon_e1)->days;
// Totaal
	$uSounddragon_total = $uSounddragon_i1;
	
	
	
////////////
// sp3c  //
//////////
// NWS
	$usp3c_s1 = new DateTime("2005-07-04");
	$usp3c_e1 = new DateTime();
	$usp3c_i1 = $usp3c_s1->diff($usp3c_e1)->days;
// DEF
	$usp3c_s2 = new DateTime("2008-11-19");
	$usp3c_e2 = new DateTime("2010-11-08");
	$usp3c_i2 = $usp3c_s2->diff($usp3c_e2)->days;
// Totaal
	$usp3c_total = $usp3c_i1;



///////////////////
// Specularium  //
/////////////////
// KLB
	$uSpecularium_s1 = new DateTime("2013-08-15");
	$uSpecularium_e1 = new DateTime();
	$uSpecularium_i1 = $uSpecularium_s1->diff($uSpecularium_e1)->days;
// Totaal
	$uSpecularium_total = $uSpecularium_i1;
	
	
	
/////////////
// static //
///////////
// SHO
	$ustatic_s1 = new DateTime("2003-09-06");
	$ustatic_e1 = new DateTime("2005-04-15");
	$ustatic_i1 = $ustatic_s1->diff($ustatic_e1)->days;
// SHO
	$ustatic_s2 = new DateTime("2005-04-23");
	$ustatic_e2 = new DateTime("2005-07-04");
	$ustatic_i2 = $ustatic_s2->diff($ustatic_e2)->days;
// SHO
	$ustatic_s3 = new DateTime("2006-08-15");
	$ustatic_e3 = new DateTime();
	$ustatic_i3 = $ustatic_s3->diff($ustatic_e3)->days;
// KAA
	$ustatic_s4 = new DateTime("2008-05-09");
	$ustatic_e4 = new DateTime("2012-12-25");
	$ustatic_i4 = $ustatic_s4->diff($ustatic_e4)->days;
// KAA
	$ustatic_s5 = new DateTime("2013-06-05");
	$ustatic_e5 = new DateTime();
	$ustatic_i5 = $ustatic_s5->diff($ustatic_e5)->days;
// Totaal
	$ustatic_total = 	$ustatic_i1 + $ustatic_i2 + $ustatic_i3;
// Redactie FP
	$ustatic_fs1 = new DateTime("2005-01-03");
	$ustatic_fe1 = new DateTime("2005-04-12");
	$ustatic_fi1 = $ustatic_fs1->diff($ustatic_fe1)->days;
// Redactie FP
	$ustatic_fs2 = new DateTime("2008-09-15");
	$ustatic_fe2 = new DateTime();
	$ustatic_fi2 = $ustatic_fs2->diff($ustatic_fe2)->days;



///////////////
// Tamashii //
/////////////
// SEX
	$uTamashii_s1 = new DateTime("2012-04-26");
	$uTamashii_e1 = new DateTime();
	$uTamashii_i1 = $uTamashii_s1->diff($uTamashii_e1)->days;
// Totaal
	$uTamashii_total =   $uTamashii_i1;


	
///////////////
// timmmmm  //
/////////////
// VKZ 2010
	$utimmmmm_s1 = new DateTime("2010-03-05");
	$utimmmmm_e1 = new DateTime("2010-09-01");
	$utimmmmm_i1 = $utimmmmm_s1->diff($utimmmmm_e1)->days;
// NWS
	$utimmmmm_s2 = new DateTime("2011-07-17");
	$utimmmmm_e2 = new DateTime("2012-10-17");
	$utimmmmm_i2 = $utimmmmm_s2->diff($utimmmmm_e2)->days;
// VKZ 2012
	$utimmmmm_s3 = new DateTime("2012-04-22");
	$utimmmmm_e3 = new DateTime("2012-11-13");
	$utimmmmm_i3 = $utimmmmm_s3->diff($utimmmmm_e3)->days;
// NWS
	$utimmmmm_s4 = new DateTime("2012-12-01");
	$utimmmmm_e4 = new DateTime();
	$utimmmmm_i4 = $utimmmmm_s4->diff($utimmmmm_e4)->days;
// Totaal
	$utimmmmm_s = new DateTime("2011-07-17");
	$utimmmmm_e = new DateTime("2012-11-13");
	$utimmmmm_i = $utimmmmm_s->diff($utimmmmm_e)->days;
	$utimmmmm_total = $utimmmmm_i1 + $utimmmmm_i + $utimmmmm_i4;
// Redactie FP
	$utimmmmm_fs1 = new DateTime("2012-08-01");
	$utimmmmm_fe1 = new DateTime();
	$utimmmmm_fi1 = $utimmmmm_fs1->diff($utimmmmm_fe1)->days;
// Postkantoor
	$utimmmmm_fs2 = new DateTime("2012-12-10");
	$utimmmmm_fe2 = new DateTime("2013-07-20");
	$utimmmmm_fi2 = $utimmmmm_fs2->diff($utimmmmm_fe2)->days;


//////////////
// UIO_AMS //
////////////
// TRV
	$uUIO_AMS_s1 = new DateTime("2004-09-08");
	$uUIO_AMS_e1 = new DateTime();
	$uUIO_AMS_i1 = $uUIO_AMS_s1->diff($uUIO_AMS_e1)->days;
// LEF
	$uUIO_AMS_s2 = new DateTime("2006-11-05");
	$uUIO_AMS_e2 = new DateTime("2007-04-11");
	$uUIO_AMS_i2 = $uUIO_AMS_s2->diff($uUIO_AMS_e2)->days;
// TDF
	$uUIO_AMS_s3 = new DateTime("2007-06-10");
	$uUIO_AMS_e3 = new DateTime("2007-08-10");
	$uUIO_AMS_i3 = $uUIO_AMS_s3->diff($uUIO_AMS_e3)->days;
// Totaal
	$uUIO_AMS_total = $uUIO_AMS_i1;



/////////////////
// Vonkenboer //
///////////////
// K&W
	$uVonkenboer_s1 = new DateTime("2008-03-06");
	$uVonkenboer_e1 = new DateTime();
	$uVonkenboer_i1 = $uVonkenboer_s1->diff($uVonkenboer_e1)->days;
// Totaal	
	$uVonkenboer_total = $uVonkenboer_i1;


	
/////////////
// zarGon //
///////////
// ONZ
	$uzarGon_s1 = new DateTime("2007-12-24");
	$uzarGon_e1 = new DateTime("2008-12-24");
	$uzarGon_i1 = $uzarGon_s1->diff($uzarGon_e1)->days;
// R&P
	$uzarGon_s2 = new DateTime("2012-08-10");
	$uzarGon_e2 = new DateTime();
	$uzarGon_i2 = $uzarGon_s2->diff($uzarGon_e2)->days;
// Totaal						
	$uzarGon_total = $uzarGon_i1 + $uzarGon_i2;

?>
