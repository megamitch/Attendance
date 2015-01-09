/**
 * The MIT License
 *
 * Copyright (c) 2012-2014, contributors of Mega Mitch Credit, Inc. software project.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
$('#addRowEarly').click( function() {      
	var tableID = "rowTable";
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	var row = table.insertRow(rowCount);
	
	var element1 = "<tr>\n\
                            <td><input style=\"background-color: transparent;border: 0px solid;\" name=\"from[]\" type=\"text\"></td>\n\
                            <td><input style=\"background-color: transparent;border: 0px solid;\" name=\"to[]\" type=\"text\"></td>\n\
                            <td><input style=\"background-color: transparent;border: 0px solid;\" name=\"purpose[]\" type=\"text\"></td>\n\
                            <td><input style=\"background-color: transparent;border: 0px solid;\" name=\"description[]\" type=\"text\"></td>\n\
                            <td><input style=\"background-color: transparent;border: 0px solid;\" name=\"amount[]\" type=\"text\"></td>\n\
                            <td><input style=\"background-color: transparent;border: 0px solid;\" name=\"date[]\" type=\"date\"></td>\n\
                            <td><input style=\"background-color: transparent;border: 0px solid;\" name=\"time[]\" type=\"text\"></td>\n\
                            <td class=\"col-md-1\">\n\
                                <button class=\"remCF\"  type=\"button\">\n\
                                    <i class=\"fa fa-minus-circle\"></i>\n\
                                </button>\n\
                        </td>\n\
                        </tr>";
	row.innerHTML = element1;
        
}); 
$('#addRowRegular').click( function() {      
	var tableID = "rowTable";
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	var row = table.insertRow(rowCount);
	
	var element1 = "<td><input style=\"background-color: transparent;border: 0px solid;\" name=\"from[]\"type=\"text\"></td>\n\
                        <td><input style=\"background-color: transparent;border: 0px solid;\" name=\"to[]\"type=\"text\"></td>\n\
                        <td><input style=\"background-color: transparent;border: 0px solid;\" name=\"purpose[]\" type=\"text\"></td>\n\
                        <td><input style=\"background-color: transparent;border: 0px solid;\" name=\"description[]\" type=\"text\"></td>\n\
                        <td><input style=\"background-color: transparent;border: 0px solid;\" name=\"amount[]\"type=\"text\"></td>\n\
                        <td class=\"col-md-1\">\n\
                            <button class=\"remCF\"  value=\"Delete Row\" type=\"button\">\n\
                        <i class=\"fa fa-minus-circle\"></i>\n\
                        </button> \n\
                </td>";
	row.innerHTML = element1;
        
}); 
/**
$('#deleteRow').click( function() {		
		var tableID = "rowTable";
		var table = document.getElementById(tableID);
		var rowCount = table.rows.length;
		console.log(rowCount);
		if(rowCount !== 3) {			
			rowCount = rowCount - 1;
			table.deleteRow(rowCount);
		}			
});
*/

$("#rowTable").on('click','.remCF',function(){
        var tableID = "rowTable";
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	console.log(rowCount);
	if(rowCount !== 3) {
        $(this).parent().parent().remove().remove().remove().remove().remove();
                }
    });
