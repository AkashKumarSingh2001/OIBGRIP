const calculateTemp = () => 
{
    const numberTemp = document.getElementById('temp').value ;

    //console.log(numberTemp);

    const tempSelected = document.getElementById('temp_diff');
    const valueTemp = temp_diff.options[tempSelected.selectedIndex].value ;

    //console.log(valueTemp);

    let result ;

    if(valueTemp == 'cel')
    {
        result = ((9 / 5 ) * numberTemp) + 32 ;
        //console.log(result);
        const output = document.getElementById('resContainer');
        output.innerHTML = result +" "+"°Fahrenheit" ;
    }
    else
    {
        result = ((5 / 9)*numberTemp) - 32 ;
        //console.log(result);
        const output = document.getElementById('resContainer');
        output.innerHTML = result +" "+"°Celcius" ;
    }
}