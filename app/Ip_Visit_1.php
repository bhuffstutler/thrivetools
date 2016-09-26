<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Ip_Visit_1
 *
 * @property string $ipv1_num foreign key = visit.visit_id
 * @property float $ipv1_seq
 * @property string $ipv1_room
 * @property string $ipv1_moms_num
 * @property string $ipv1_req_room
 * @property string $ipv1_smoke
 * @property string $ipv1_ad_date
 * @property string $ipv1_ad_time
 * @property string $ipv1_ad_init
 * @property string $ipv1_dis_date
 * @property string $ipv1_dis_time
 * @property string $ipv1_dis_init
 * @property string $ipv1_condition
 * @property string $ipv1_pre_ad
 * @property float $ipv1_ex_date
 * @property string $ipv1_en_date
 * @property string $ipv1_pre_init
 * @property string $ipv1_p_addr1
 * @property string $ipv1_p_addr2
 * @property string $ipv1_p_city
 * @property string $ipv1_p_state
 * @property float $ipv1_p_zip
 * @property string $ipv1_religion
 * @property string $ipv1_church
 * @property string $ipv1_b_place
 * @property string $ipv1_nation
 * @property string $ipv1_military
 * @property string $ipv1_occup
 * @property string $ipv1_emp
 * @property string $ipv1_empaddr
 * @property float $ipv1_empphone
 * @property string $ipv1_spouse
 * @property string $ipv1_sp_addr
 * @property string $ipv1_sp_b_pl
 * @property string $ipv1_notify
 * @property string $ipv1_no_rel
 * @property string $ipv1_no_addr
 * @property float $ipv1_no_phone
 * @property string $ipv1_father
 * @property string $ipv1_dad_b_pl
 * @property string $ipv1_mom
 * @property string $ipv1_mom_b_pl
 * @property string $ipv1_prevnum1
 * @property string $ipv1_prevdat1
 * @property string $ipv1_prevnum2
 * @property float $ipv1_prevdat2
 * @property string $ipv1_acc_date
 * @property string $ipv1_acc_time
 * @property string $ipv1_acc_place_old
 * @property string $ipv1_acc_event
 * @property float $ipv1_phy
 * @property string $ipv1_ns
 * @property string $ipv1_roomtype
 * @property string $ipv1_pvtness
 * @property float $ipv1_aforms
 * @property string $ipv1_isolation
 * @property float $ipv1_phy2
 * @property string $ipv1_care
 * @property float $ipv1_p_phone
 * @property string $ipv1_p_cnty
 * @property string $ipv1_diabetic
 * @property string $ipv1_rfluid
 * @property string $ipv1_rsodium
 * @property string $ipv1_acc_cd
 * @property string $ipv1_mrinit
 * @property string $ipv1_commentdt
 * @property float $ipv1_qiurdate
 * @property string $ipv1_empcity
 * @property string $ipv1_empstate
 * @property float $ipv1_empzip
 * @property float $ipv1_dpbc
 * @property string $ipv1_sp_addr2
 * @property string $ipv1_sp_city
 * @property string $ipv1_sp_state
 * @property float $ipv1_sp_zip
 * @property string $ipv1_no_addr2
 * @property string $ipv1_no_city
 * @property string $ipv1_no_state
 * @property float $ipv1_no_zip
 * @property string $ipv1_empaddr2
 * @property float $ipv1_csltphy1
 * @property float $ipv1_csltphy2
 * @property float $ipv1_csltphy3
 * @property float $ipv1_csltphy4
 * @property float $ipv1_csltphy5
 * @property string $ipv1_species
 * @property string $ipv1_name
 * @property string $ipv1_inf_cntl
 * @property string $ipv1_dnr
 * @property string $ipv1_pharm_name
 * @property float $ipv1_pharm_phone
 * @property string $ipv1_origin
 * @property string $ipv1_acc_place
 * @property string $ipv1_patresp_cd
 * @property float $ipv1_patresp_rt
 * @property string $ipv1_patresp_dt
 * @property string $ipv1_mr_date_rev
 * @property string $ipv1_mrinit_rev
 * @property float $ipv1_patresp_locl
 * @property string $ipv1_combineacct
 * @property string $ipv1_pre_orginit
 * @property string $ipv1_expired_dt
 * @property string $ipv1_lastname
 * @property string $ipv1_firstname
 * @property string $ipv1_midname
 * @property string $ipv1_maiden
 * @property string $ipv1_hosp_dir
 * @property string $ipv1_adm_eecomp
 * @property string $ipv1_adm_eetype
 * @property string $ipv1_adm_eenumb
 * @property string $ipv1_ad_time_obs
 * @property string $ipv1_dis_time_obs
 * @property string $ipv1_dis_date_obs
 * @property string $ipv1_indwel
 * @property string $ipv1_termltc
 * @property string $ipv1_fallrisk
 * @property string $ipv1_p_cntry
 * @property string $ipv1_postalcd
 * @property string $ipv1_acc_cd_obs
 * @property string $ipv1_origorigin
 * @property string $ipv1_origadmdt
 * @property string $ipv1_origadmtm
 * @property string $ipv1_origadmcd
 * @property string $ipv1_origadmcond
 * @property string $ipv1_origadminit
 * @property string $ipv1_origdisdt
 * @property string $ipv1_origdistm
 * @property string $ipv1_origdiscd
 * @property string $ipv1_origdisinit
 * @property string $ipv1_origdiscond
 * @property string $ipv1_cahstate array[10]
 * @property string $ipv1_ethnic
 * @property string $ipv1_language
 * @property string $ipv1_admcd
 * @property string $ipv1_admcond
 * @property string $ipv1_discd
 * @property string $ipv1_discond
 * @property string $ipv1_p_email
 * @property float $ipv1_no_cell
 * @property string $ipv1_guar_email
 * @property float $ipv1_guar_cell
 * @property float $ipv1_p_cell
 * @property string $ipv1_submitdt
 * @property string $ipv1_acc_state
 * @property float $ipv1_c_ssn_10dig
 * @property float $ipv1_c_profilenum foreign key = profile.prof_c_profilenum
 * @property float $ipv1_guar_profilenum
 * @property string $ipv1_prev_mrnum
 * @property string $ipv1_chtvol1
 * @property string $ipv1_chtvol2
 * @property string $ipv1_ad_date_obs
 * @property string $ipv1_adv_dir_reason
 * @property string $ipv1_adv_dir_date
 * @property string $ipv1_adv_dir_time
 * @property string $ipv1_adv_dir_init
 * @property float $ipv1_abssn
 * @property string $ipv1_causeofdeath
 * @property string $ipv1_noactivemeds
 * @property string $ipv1_nomeds_dt
 * @property string $ipv1_nomeds_tm
 * @property string $ipv1_nomeds_login
 * @property string $ipv1_medhistconsent
 * @property string $ipv1_hieshared
 * @property string $ipv1_hieshared_dt
 * @property string $ipv1_participate
 * @property float $ipv1_arid
 * @property string $ipv1_admitdec_tm
 * @property string $ipv1_admitdec_dt
 * @property string $ipv1_ubl
 * @property string $ipv1_ch_comp_dt
 * @property string $ipv1_ch_comp_ubl
 * @property float $ipv1_age_days
 * @property float $ipv1_age_months
 * @property string $ipv1_last_datechanged
 * @property string $ipv1_language_code
 * @property float $ipv1_age_years
 * @property string $ipv1_last_timechanged
 * @property string $ipv1_restrict_payer_disclosure
 * @property string $ipv1_decline_pat_summary
 * @property string $ipv1_othtreatdt
 * @property string $ipv1_treatqual
 * @property string $ipv1_clinic_code
 * @property string $ipv1_othtreatqual
 * @property string $ipv1_chartcompleted
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Num($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Seq($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Room($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1MomsNum($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1ReqRoom($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Smoke($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AdDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AdTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AdInit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1DisDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1DisTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1DisInit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Condition($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PreAd($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1ExDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1EnDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PreInit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PAddr1($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PAddr2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PZip($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Religion($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Church($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1BPlace($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Nation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Military($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Occup($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Emp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Empaddr($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Empphone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Spouse($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1SpAddr($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1SpBPl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Notify($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1NoRel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1NoAddr($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1NoPhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Father($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1DadBPl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Mom($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1MomBPl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Prevnum1($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Prevdat1($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Prevnum2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Prevdat2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AccDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AccTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AccPlaceOld($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AccEvent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Phy($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Ns($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Roomtype($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Pvtness($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Aforms($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Isolation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Phy2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Care($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PPhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PCnty($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Diabetic($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Rfluid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Rsodium($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AccCd($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Mrinit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Commentdt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Qiurdate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Empcity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Empstate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Empzip($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Dpbc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1SpAddr2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1SpCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1SpState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1SpZip($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1NoAddr2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1NoCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1NoState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1NoZip($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Empaddr2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Csltphy1($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Csltphy2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Csltphy3($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Csltphy4($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Csltphy5($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Species($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Name($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1InfCntl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Dnr($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PharmName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PharmPhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Origin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AccPlace($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PatrespCd($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PatrespRt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PatrespDt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1MrDateRev($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1MrinitRev($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PatrespLocl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Combineacct($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PreOrginit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1ExpiredDt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Lastname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Firstname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Midname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Maiden($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1HospDir($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AdmEecomp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AdmEetype($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AdmEenumb($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AdTimeObs($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1DisTimeObs($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1DisDateObs($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Indwel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Termltc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Fallrisk($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PCntry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Postalcd($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AccCdObs($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Origorigin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Origadmdt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Origadmtm($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Origadmcd($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Origadmcond($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Origadminit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Origdisdt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Origdistm($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Origdiscd($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Origdisinit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Origdiscond($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Cahstate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Ethnic($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Language($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Admcd($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Admcond($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Discd($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Discond($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1NoCell($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1GuarEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1GuarCell($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PCell($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Submitdt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AccState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1CSsn10dig($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1CProfilenum($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1GuarProfilenum($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1PrevMrnum($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Chtvol1($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Chtvol2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AdDateObs($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AdvDirReason($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AdvDirDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AdvDirTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AdvDirInit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Abssn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Causeofdeath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Noactivemeds($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1NomedsDt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1NomedsTm($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1NomedsLogin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Medhistconsent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Hieshared($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1HiesharedDt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Participate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Arid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AdmitdecTm($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AdmitdecDt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Ubl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1ChCompDt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1ChCompUbl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AgeDays($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AgeMonths($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1LastDatechanged($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1LanguageCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1AgeYears($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1LastTimechanged($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1RestrictPayerDisclosure($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1DeclinePatSummary($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Othtreatdt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Treatqual($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1ClinicCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Othtreatqual($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ip_Visit_1 whereIpv1Chartcompleted($value)
 * @mixin \Eloquent
 */
class Ip_Visit_1 extends Model
{
    /**
     * The database connection associated with the model.
     *
     * @var string
     */
    protected $connection = 'cpsi';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ip_visit_1';

    /**
     * The primary key of the model.
     *
     * @var string
     */
    protected $primaryKey = 'ipv1_num';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
