 <?php
	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	function render_inputs($i){

		echo "
			<tr>
                <td class='text-nowrap'>
                    <div class='font-weight-600'>$i</div>
                </td>
                <td class='text-center'><input type='text' class='name' name='member'.'$i'.'_name' placeholder='Enter Name'>
                    </td>
                <td class='text-center'>
                    <input type='text' class='name' name='member'.'$i'.'_email' placeholder='Enter Email'></td>
                <td class='text-center'>
                    <input type='text' class='name' name='member'.'$i'.'_organization' placeholder='Enter Organization'>
                </td>
            </tr>
		";
	}
    function show_team($i,$name,$email,$organization){
        echo "
        <tr>
                <td class='text-nowrap'>
                    <div class='font-weight-600'>$i</div>
                </td>
                <td class='text-nowrap'>$name</td>
                <td class='text-center'>$email</td>
                <td class='text-center'>$organization</td>
                
        </tr>
        ";
    }

?> 