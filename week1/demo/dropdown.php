<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php 
    
      $states = array(
                    'AL'=>'ALABAMA',
                    'AK'=>'ALASKA',
                    'AS'=>'AMERICAN SAMOA',
                    'AZ'=>'ARIZONA',
                    'AR'=>'ARKANSAS',
                    'CA'=>'CALIFORNIA',
                    'CO'=>'COLORADO',
                    'CT'=>'CONNECTICUT',
                    'DE'=>'DELAWARE',
                    'DC'=>'DISTRICT OF COLUMBIA',
                    'FM'=>'FEDERATED STATES OF MICRONESIA',
                    'FL'=>'FLORIDA',
                    'GA'=>'GEORGIA',
                    'GU'=>'GUAM GU',
                    'HI'=>'HAWAII',
                    'ID'=>'IDAHO',
                    'IL'=>'ILLINOIS',
                    'IN'=>'INDIANA',
                    'IA'=>'IOWA',
                    'KS'=>'KANSAS',
                    'KY'=>'KENTUCKY',
                    'LA'=>'LOUISIANA',
                    'ME'=>'MAINE',
                    'MH'=>'MARSHALL ISLANDS',
                    'MD'=>'MARYLAND',
                    'MA'=>'MASSACHUSETTS',
                    'MI'=>'MICHIGAN',
                    'MN'=>'MINNESOTA',
                    'MS'=>'MISSISSIPPI',
                    'MO'=>'MISSOURI',
                    'MT'=>'MONTANA',
                    'NE'=>'NEBRASKA',
                    'NV'=>'NEVADA',
                    'NH'=>'NEW HAMPSHIRE',
                    'NJ'=>'NEW JERSEY',
                    'NM'=>'NEW MEXICO',
                    'NY'=>'NEW YORK',
                    'NC'=>'NORTH CAROLINA',
                    'ND'=>'NORTH DAKOTA',
                    'MP'=>'NORTHERN MARIANA ISLANDS',
                    'OH'=>'OHIO',
                    'OK'=>'OKLAHOMA',
                    'OR'=>'OREGON',
                    'PW'=>'PALAU',
                    'PA'=>'PENNSYLVANIA',
                    'PR'=>'PUERTO RICO',
                    'RI'=>'RHODE ISLAND',
                    'SC'=>'SOUTH CAROLINA',
                    'SD'=>'SOUTH DAKOTA',
                    'TN'=>'TENNESSEE',
                    'TX'=>'TEXAS',
                    'UT'=>'UTAH',
                    'VT'=>'VERMONT',
                    'VI'=>'VIRGIN ISLANDS',
                    'VA'=>'VIRGINIA',
                    'WA'=>'WASHINGTON',
                    'WV'=>'WEST VIRGINIA',
                    'WI'=>'WISCONSIN',
                    'WY'=>'WYOMING',
                    'AE'=>'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
                    'AA'=>'ARMED FORCES AMERICA (EXCEPT CANADA)',
                    'AP'=>'ARMED FORCES PACIFIC'
            );
            
            $selectedState = filter_input(INPUT_POST, 'states');
          ?>
        
        <form action="#" method="post">
          <select name="states">
            <?php foreach ($states as $key => $value): ?> 
              <option value="<?php echo $key; ?>" <?php if ( $selectedState == $key ): ?> selected="selected" <?php endif; ?>><?php echo $value; ?></option>
            <?php endforeach; ?>
          </select>
            
            <input type="submit" value="submit" />
          </form>
    </body>
</html>
