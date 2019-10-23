$('#frmContact').submit(function(){
    console.log('Form submitted')

$.ajax({
method: 'POST',
url: 'apis/api-send-email.php',
data: $('#frmContact').serialize(),
dataType: "JSON"
}).
done(function(jData){
    console.log(jData)
    // if(jData != 1){ add validation classes} 
    // $("#frm-feedback").text(jData.message)
}).
fail(function(data){
    console.log(data)
    console.log('fail')
})
return false
})