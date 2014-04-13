$(function(){
    
    //highlight the current nav
    $("#home a:contains('Home')").parent().addClass('active');
    $("#blog a:contains('Blog')").parent().addClass('active');
    $("#about a:contains('About')").parent().addClass('active');
    
    //toggle the subscribe button
    $('#subscribe-form').collapse({
        toggle: true
    })
            
 }); //JQuery is loaded