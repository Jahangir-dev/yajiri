<form method="post" id="registrationForm" action="{{route('userRegister')}}">
@csrf
<input type="hidden" name="registerEmail" id="registerEmail">
<input type="hidden" name="registerFirstName" id="registerFirstName">
<input type="hidden" name="registerLastName" id="registerLastName">
<input type="hidden" name="registerCompanyName" id="registerCompanyName">
<input type="hidden" name="registerAddress" id="registerAddress">
<input type="hidden" name="registerSiretNumber" id="registerSiretNumber">
<input type="hidden" name="registerPhoneNumber" id="registerPhoneNumber">
<input type="hidden" name="registerPassword" id="registerPassword">
<input type="hidden" name="registerCountrySelect" id="registerCountrySelect">
<input type="hidden" name="registerPhoneNumber1" id="registerPhoneNumber1">		
<input type="hidden" name="registerSendCodeViaSMS" id="registerSendCodeViaSMS">	

<input type="hidden" name="registerLat" id="registerLat">		
<input type="hidden" name="registerLng" id="registerLng">	

	        
</form>