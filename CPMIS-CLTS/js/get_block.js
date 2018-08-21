function getblock_name(value,errormsg)
{
if(errormsg!="")
{
document.getElementById(errormsg).innerHTML= "" ;

}
$.ajax({
		url: 'get_block_name.php?parent_id=' + value,
		success: function(data) {
		$("#nameofblock").html(data);
		}
});
}