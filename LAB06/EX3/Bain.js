function brain()
{
	let pw = document.getElementById('passwordid').value;
	let item1 = document.getElementById('item1').value;
	let item2 = document.getElementById('item2').value;
	let item3 = document.getElementById('item3').value;


	if ( !(pw) ){
		alert('Enter a password');
		return false;
	}
	if( !(item1) ){
		alert('Please enter a valid amount');
		return false;
	}
	if( !(item2) ){
		alert('Please enter a valid amount');
		return false;
	}
	if( !(item3) ){
		alert('Please enter a valid amount');
		return false;
	}
	if ((item1 + item2 + item3) == 0){
		alert('Enter a valid amount of items');
		return false;
	} 
}