<?php
/* 
	CORRECTIONS:
<header></header> = headers _headers;
<!--  --> = c _c;
<var></var> = vars _vars;
<time></time> = times _times;
<link></link> = links _links; 
*/

	##########################
	##########################
	###### BASIC HTML ########
	##########################
	##########################

	function DOCTYPE($att){
		echo "<!DOCTYPE" .$att .">";
	}

	function html($att){
		echo "<html " .$att .">";
	}
	function _html(){
		echo "</html>";
	}

	function head($att){
		echo "<head " .$att .">";
	}
	function _head(){
		echo "</head>";
	}

	function title($att){
		echo "<title " .$att .">";
	}
	function _title(){
		echo "</title>";
	}

	function body($att){
		echo "<body " .$att .">";
	}
	function _body(){
		echo "</body>";
	}
///////// H1 - H6 //////////
	function h1($att){
		echo "<h1 " .$att .">";
	}
	function _h1(){
		echo "</h1>";
	}

	function h2($att){
		echo "<h2 " .$att .">";
	}
	function _h2(){
		echo "</h2>";
	}

	function h3($att){
		echo "<h3 " .$att .">";
	}
	function _h3(){
		echo "</h3>";
	}

	function h4($att){
		echo "<h4 " .$att .">";
	}
	function _h4(){
		echo "</h4>";
	}

	function h5($att){
		echo "<h5 " .$att .">";
	}
	function _h5(){
		echo "</h5>";
	}

	function h6($att){
		echo "<h6 " .$att .">";
	}
	function _h6(){
		echo "</h6>";
	}
////////////////////////////////
	function p($att){
		echo "<p " .$att .">";
	}
	function _p(){
		echo "</p>";
	}

	function br($att){
		echo "<br " .$att .">";
	}
	function _br(){
		echo "</br>";
	}

	function hr($att){
		echo "<hr " .$att .">";
	}
	function _hr(){
		echo "</hr>";
	}

	function c($att){
		echo "<!-- ";
	}
	function _c($att){
		echo "-->";
	}
	##########################
	##########################
	##########################
	##########################


	##########################
	##########################
	###### FORMATTING ########
	##########################
	##########################

	function abbr($att){
		echo "<abbr " .$att .">";
	}
	function _abbr(){
		echo "</abbr>";
	}
	function address($att){
		echo "<address " .$att .">";
	}
	function _address(){
		echo "</address>";
	}
	function b($att){
		echo "<b " .$att .">";
	}
	function _b(){
		echo "</b>";
	}
	function bdi($att){
		echo "<bdi " .$att .">";
	}
	function _bdi(){
		echo "</bdi>";
	}
	function blockquote($att){
		echo "<blockquote " .$att .">";
	}
	function _blockquote(){
		echo "</blockquote>";
	}
	function cite($att){
		echo "<cite " .$att .">";
	}
	function _cite(){
		echo "</cite>";
	}
	function code($att){
		echo "<code " .$att .">";
	}
	function _code(){
		echo "</code>";
	}
	function del($att){
		echo "<del " .$att .">";
	}
	function _del(){
		echo "</del>";
	}
	function drn($att){
		echo "<drn " .$att .">";
	}
	function _drn(){
		echo "</drn>";
	}
	function em($att){
		echo "<em " .$att .">";
	}
	function _em(){
		echo "</em>";
	}
	function i($att){
		echo "<i " .$att .">";
	}
	function _i(){
		echo "</i>";
	}
	function ins($att){
		echo "<ins " .$att .">";
	}
	function _ins(){
		echo "</ins>";
	}
	function kbd($att){
		echo "<kbd " .$att .">";
	}
	function _kbd(){
		echo "</kbd>";
	}
	function mark($att){
		echo "<mark " .$att .">";
	}
	function _mark(){
		echo "</mark>";
	}
	function meter($att){
		echo "<meter " .$att .">";
	}
	function _meter(){
		echo "</meter>";
	}
	function pre($att){
		echo "<pre " .$att .">";
	}
	function _pre(){
		echo "</pre>";
	}
	function progress($att){
		echo "<progress " .$att .">";
	}
	function _progress(){
		echo "</progress>";
	}
	function q($att){
		echo "<q " .$att .">";
	}
	function _q(){
		echo "</q>";
	}
	function rp($att){
		echo "<rp " .$att .">";
	}
	function _rp(){
		echo "</rp>";
	}
	function rt($att){
		echo "<rt " .$att .">";
	}
	function _rt(){
		echo "</rt>";
	}
	function ruby($att){
		echo "<ruby " .$att .">";
	}
	function _ruby(){
		echo "</ruby>";
	}
	function s($att){
		echo "<s " .$att .">";
	}
	function _s(){
		echo "</s>";
	}
	function samp($att){
		echo "<samp " .$att .">";
	}
	function _samp(){
		echo "</samp>";
	}
	function small($att){
		echo "<small " .$att .">";
	}
	function _small(){
		echo "</small>";
	}
	function strong($att){
		echo "<strong " .$att .">";
	}
	function _strong(){
		echo "</strong>";
	}
	function sub($att){
		echo "<sub " .$att .">";
	}
	function _sub(){
		echo "</sub>";
	}
	function sup($att){
		echo "<sup " .$att .">";
	}
	function _sup(){
		echo "</sup>";
	}
	function templete($att){
		echo "<templete " .$att .">";
	}
	function _templete(){
		echo "</templete>";
	}
	function times($att){
		echo "<time " .$att .">";
	}
	function _times(){
		echo "</time>";
	}
	function u($att){
		echo "<u " .$att .">";
	}
	function _u(){
		echo "</u>";
	}
	function vars($att){
		echo "<var " .$att .">";
	}
	function _vars_(){
		echo "</var>";
	}
	function wbr($att){
		echo "<wbr " .$att .">";
	}
	function _wbr(){
		echo "</wbr>";
	}

	##########################
	##########################
	##########################
	##########################


	##########################
	##########################
	#### FORMS and INPUT #####
	##########################
	##########################

	function form($att){
		echo "<form " .$att .">";
	}
	function _form(){
		echo "</form>";
	}
	function input($att){
		echo "<input " .$att .">";
	}
	function _input(){
		echo "</input>";
	}
	function textarea($att){
		echo "<textarea " .$att .">";
	}
	function _textarea(){
		echo "</textarea>";
	}
	function button($att){
		echo "<button " .$att .">";
	}
	function _button(){
		echo "</button>";
	}
	function select($att){
		echo "<select " .$att .">";
	}
	function _select(){
		echo "</select>";
	}
	function optgroup($att){
		echo "<optgroup " .$att .">";
	}
	function _optgroup(){
		echo "</optgroup>";
	}
	function option($att){
		echo "<option " .$att .">";
	}
	function _option(){
		echo "</option>";
	}
	function label($att){
		echo "<label " .$att .">";
	}
	function _label(){
		echo "</label>";
	}
	function fieldset($att){
		echo "<fieldset " .$att .">";
	}
	function _fieldset(){
		echo "</fieldset>";
	}
	function legend($att){
		echo "<legend " .$att .">";
	}
	function _legend(){
		echo "</legend>";
	}
	function datalist($att){
		echo "<datalist " .$att .">";
	}
	function _datalist(){
		echo "</datalist>";
	}
	function output($att){
		echo "<output " .$att .">";
	}
	function _output(){
		echo "</output>";
	}
	##########################
	##########################
	##########################
	##########################


	##########################
	##########################
	######### FRAMES #########
	##########################
	##########################

	function iframe($att){
		echo "<iframe " .$att .">";
	}
	function _iframe(){
		echo "</iframe>";
	}

	##########################
	##########################
	##########################
	##########################


	##########################
	##########################
	######### IMAGES #########
	##########################
	##########################

	function img($att){
		echo "<img " .$att .">";
	}
	function _img(){
		echo "</img>";
	}
	function map($att){
		echo "<map " .$att .">";
	}
	function _map(){
		echo "</map>";
	}
	function area($att){
		echo "<area " .$att .">";
	}
	function _area(){
		echo "</area>";
	}
	function canvas($att){
		echo "<canvas " .$att .">";
	}
	function _canvas(){
		echo "</canvas>";
	}
	function figcaption($att){
		echo "<figcaption " .$att .">";
	}
	function _figcaption(){
		echo "</figcaption>";
	}
	function figure($att){
		echo "<figure " .$att .">";
	}
	function _figure(){
		echo "</figure>";
	}
	function picture($att){
		echo "<picture " .$att .">";
	}
	function _picture(){
		echo "</picture>";
	}

	##########################
	##########################
	##########################
	##########################


	##########################
	##########################
	##### AUDIO / VIDEO ######
	##########################
	##########################


	function audio($att){
		echo "<audio " .$att .">";
	}
	function _audio(){
		echo "</audio>";
	}
	function source($att){
		echo "<source " .$att .">";
	}
	function _source(){
		echo "</source>";
	}
	function track($att){
		echo "<track " .$att .">";
	}
	function _track(){
		echo "</track>";
	}
	function video($att){
		echo "<video " .$att .">";
	}
	function _video(){
		echo "</video " .$att .">";
	}

	##########################
	##########################
	##########################
	##########################


	##########################
	##########################
	######### LINKS #########
	##########################
	##########################

	function a($att){
		echo "<a " .$att .">";
	}
	function _a(){
		echo "</a>";
	}
	function links($att){
		echo "<link " .$att .">";
	}
	function _links(){
		echo "</link>";
	}
	function nav($att){
		echo "<nav " .$att .">";
	}
	function _nav(){
		echo "</nav>";
	}

	##########################
	##########################
	##########################
	##########################



	##########################
	##########################
	######### LISTS #########
	##########################
	##########################

	function ul($att){
		echo "<ul " .$att .">";
	}
	function _ul(){
		echo "</ul>";
	}
	function ol($att){
		echo "<ol " .$att .">";
	}
	function _ol(){
		echo "</ol>";
	}
	function li($att){
		echo "<li " .$att .">";
	}
	function _li(){
		echo "</li>";
	}
	// function dl($att){
	// 	echo "<dl " .$att .">";
	// }
	// functsion _dl($att){
	// 	echo "</dl>";
	// }
	function dt($att){
		echo "<dt " .$att .">";
	}
	function _dt(){
		echo "</dt>";
	}
	function dd($att){
		echo "<dd " .$att .">";
	}
	function _dd(){
		echo "</dd>";
	}
	function menu($att){
		echo "<menu " .$att .">";
	}
	function _menu(){
		echo "</menu>";
	}
	function menuitem($att){
		echo "<menuitem " .$att .">";
	}
	function _menuitem(){
		echo "</menuitem>";
	}

	##########################
	##########################
	##########################
	##########################


	##########################
	##########################
	######### TABLES #########
	##########################
	##########################

	function table($att){
		echo "<table " .$att .">";
	}
	function _table(){
		echo "</table>";
	}
	function caption($att){
		echo "<caption " .$att .">";
	}
	function _caption(){
		echo "</caption>";
	}
	function th($att){
		echo "<th " .$att .">";
	}
	function _th(){
		echo "</th>";
	}
	function tr($att){
		echo "<tr " .$att .">";
	}
	function _tr(){
		echo "</tr>";
	}
	function td($att){
		echo "<td " .$att .">";
	}
	function _td(){
		echo "</td>";
	}
	function thead($att){
		echo "<thead " .$att .">";
	}
	function _thead(){
		echo "</thead>";
	}
	function tbody($att){
		echo "<tbody " .$att .">";
	}
	function _tbody(){
		echo "</tbody>";
	}
	function tfoot($att){
		echo "<tfoot " .$att .">";
	}
	function _tfoot(){
		echo "</tfoot>";
	}
	function col($att){
		echo "<col " .$att .">";
	}
	function _col(){
		echo "</col>";
	}
	function colgroup($att){
		echo "<colgroup " .$att .">";
	}
	function _colgroup(){
		echo "</colgroup>";
	}

	##########################
	##########################
	##########################
	##########################


	##########################
	##########################
	## STYLES and SEMENTICS ##
	##########################
	##########################

	function style($att){
		echo "<style " .$att .">";
	}
	function _style(){
		echo "</style>";
	}
	function div($att){
		echo "<div " .$att .">";
	}
	function _div(){
		echo "</div>";
	}
	function span($att){
		echo "<span " .$att .">";
	}
	function _span(){
		echo "</span>";
	}
	function headers($att){
		echo "<header " .$att .">";
	}
	function _headers(){
		echo "</header>";
	}
	function footer($att){
		echo "<footer " .$att .">";
	}
	function _footer(){
		echo "</footer>";
	}
	function main($att){
		echo "<main " .$att .">";
	}
	function _main(){
		echo "</main>";
	}
	function section($att){
		echo "<section " .$att .">";
	}
	function _section(){
		echo "</section>";
	}
	function article($att){
		echo "<article " .$att .">";
	}
	function _article(){
		echo "</article>";
	}
	function aside($att){
		echo "<aside " .$att .">";
	}
	function _aside(){
		echo "</aside>";
	}
	function details($att){
		echo "<details " .$att .">";
	}
	function _details(){
		echo "</details>";
	}
	function dialog($att){
		echo "<dialog " .$att .">";
	}
	function _dialog(){
		echo "</dialog>";
	}
	function summary($att){
		echo "<summary " .$att .">";
	}
	function _summary(){
		echo "</summary>";
	}
	function data($att){
		echo "<data " .$att .">";
	}
	function _data(){
		echo "</data>";
	}

	##########################
	##########################
	##########################
	##########################


	##########################
	##########################
	######### META INFO #########
	##########################
	##########################

	function meta($att){
		echo "<meta " .$att .">";
	}
	function _meta(){
		echo "</meta>";
	}
	function base($att){
		echo "<base " .$att .">";
	}
	function _base(){
		echo "</base>";
	}

	##########################
	##########################
	##########################
	##########################


	##########################
	##########################
	######### PROGRAMMING #########
	##########################
	##########################

	function script($att){
		echo "<script " .$att .">";
	}
	function _script(){
		echo "</script>";
	}
	function noscript($att){
		echo "<noscript " .$att .">";
	}
	function _noscript(){
		echo "</noscript>";
	}
	function applet($att){
		echo "<applet " .$att .">";
	}
	function _applet(){
		echo "</applet>";
	}
	function embed($att){
		echo "<embed " .$att .">";
	}
	function _embed(){
		echo "</embed>";
	}
	function object($att){
		echo "<object " .$att .">";
	}
	function _object(){
		echo "</object>";
	}
	function param($att){
		echo "<param " .$att .">";
	}
	function _param(){
		echo "</param>";
	}

	##########################
	##########################
	##########################
	##########################
 ?>