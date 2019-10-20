$('#frmContact').submit(function(){
    console.log('Form submitted')

$.ajax({
method: 'GET',
url: 'api/api-send-email.php',
data: $('#frmContact').serialize(),
dataType: "JSON"
}).
done(function(jData){
    console.log(jData)
    // if(jData != 1){ add validation classes} 
    // $("#frm-feedback").text(jData.message)
}).
fail(function(){
    console.log('fail')
})
return false
})