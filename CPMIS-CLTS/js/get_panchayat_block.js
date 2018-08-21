function getpanchayat_name(value,errormsg)
{
if(errormsg!="")
{
document.getElementById(errormsg).innerHTML= "" ;

}
$.ajax({
		url: 'getpanchayat_name.php?parent_blockid=' + value,
		success: function(data) {
		$("#panchayatname").html(data);
		}
});
}