/*
// Use jQuery via jQuery(...)
*/
//jQuery.noConflict();
$(document).ready(function() {    
    // Tabs
    $( '#tabs' ).tabs({
		beforeLoad: function( event, ui ) {
			ui.jqXHR.error(function() {
			ui.panel.html(
				"Couldn't load this tab. We'll try to fix this as soon as possible. " +
				"If this wouldn't be a demo." );
			});
		}
	});
	
	$('.block-tab').hide(); //nascondi tutti i contenuti delle tabs
	$('ul.nav nav-tabs li:first').addClass('active').show(); //Attiva la prima tab
	$('.block-tab:first').show(); //Mostra il contenuto della prima tab

	//Al click sulla linguetta della tab
	$('ul.nav nav-tabs li').click(function() {
		$('ul.nav li').removeClass('active'); //Rimuovi ogni classe 'active'
		$(this).addClass('active'); //E aggiungila solo a quella su cui ho cliccato
		$('.block-tab').hide(); //Nascondi tutti i contenuti delle tab

		var activeTab = $(this).find('a').attr('href'); //Trova l'href per identificare in modo univoco la tab ed il contenuto
		$(activeTab).fadeIn(); //Mostrami quest'ultimo con effetto di fadeIn
		return false;
	});	
	$('li > a').click(function() {
		$('li > a').removeClass('active');
		$(this).addClass('active');
	});
	$('#today').each(function () {
		$('#tomorrow').hide();
    });
	$('#today').click(function () {
		$('#tomorrow').hide();
    });
	$('#tomorrow').click(function () {
		$('#today').hide();
    });
		
	/*$('select').change(function () {
		var str = '';
		$('select option:selected').each(function () {
			str += $(this).text() + ' ';
		});
		$('img').text(str);
	}).trigger('change');*/
	
	$('select').change(function() {
        var src = $(this).val();
        $('#imagePreview').html(src ? "<img src='http://www.ilmeteo.it/cartine3/0." + src + ".png' alt='Meteo " + src + "' />" : "");
    });
	
	function submitForm(id, reset){
		if(id == 'confFormRegion')
			return changeRegionImage();
		
		var form = document.getElementById(id);
		
		if(reset){
			document.getElementById('edit-posto_lid').value = 5913;
			form.reset();
		}		
		form.submit();	
	}
	
	function changeRegionImage(code){
		document.getElementById('fintoiframe').style.display = 'block';
		document.getElementById('sf_preview').style.display = 'none';
		var form = document.getElementById('confFormRegion');
		var rid = form.rid.options[form.rid.selectedIndex].value;
		var nome = form.rid.options[form.rid.selectedIndex].innerHTML;
		
		var html = '';			
		html += '<img src="http://www.ilmeteo.it/cartine3/0.' + rid + '.png" alt="Meteo ' + nome + '" border="0" />';		
		document.getElementById('fintoiframe').innerHTML = html;

		return false;
	}
});
