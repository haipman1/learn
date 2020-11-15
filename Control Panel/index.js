var test = 'null';


function loading(){

    $('#response').load('main.php', {'test': test});
    $('#response').text(test);




    $('#lists').append('<tr class="ml-4">\n' +
        '            <th scope="row">1</th>\n' +
        '            <td>1</td>\n' +
        '            <td></td>\n' +
        '            <td>+79228635625</td>\n' +
        '            <td><15</td>\n' +
        '            <td>"ds"</td>\n' +
        '            <td>0</td>\n' +
        '        </tr>');

}




