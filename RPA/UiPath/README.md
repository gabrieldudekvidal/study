# RPA Learning
Repository destinated to new skills learned about RPA based on work experience and searches across the internet. <br> <br> <br>

#### VB.NET Cheatsheet for UiPath

*Filter E-mail by Address*

```vb
"[senderemailaddress] = 'gabrieldkvl@outlook.com'"
```



##### 💾 Data Tables

###### Get Items in Data Table

```vb
'You can get items in rows of a data table using (it's useful using 'for each row')
row.item("column name").ToString
```

###### Check Specific Data

```vb
row.Item("Name").ToString="Jennifer"
```

###### Get Row Index

```vb
dtDataTable.Rows.IndexOf(row).ToString
```

###### Data Table to JSON

```VB
'You can assign this to a String Variable
jsonVariable.SerializeObject(dtDataTable)s
```



**Handling Files**

###### Get files in a directory 

```vb
Directory.GetFiles(strPathFrom)
Directory.GetFiles("C:\path\example")
```

###### Filter files

```vb
'By extension
Directory.GetFiles(strPathFrom, "*.docx")
'Multiple extensions
Directory.GetFiles(strPathFrom, "*.docx").Concat(Directory.GetFiles(strPathFrom, "*.xlsx")) 
'By name
Directory.GetFiles(strPathFrom, "file.txt")
```



##### Loops

###### Enumerable

```vb
Enumerable.Range(0,24) 'This can be use inside of a For Each to perform some action by a number of times. In this case: 25 times.
```



##### ❕ Exceptions

###### Throw Exception

```vb
Exception.Message
new BusinessRuleException("Your Exception Reason")
```



##### IeNumerable

###### Print first value

```vb
IenVariable(0).ToString
```



##### 📄 Text Expressions

```vb
'Convert integer values to string
"This is variable was converted to string" + intVariable.ToString
'Break a line
"Hello" + Environment.NewLine + "Gabriel!" 
```

###### Replace and remove values

```vb
'Replace
.Replace("value to replace", "replace with this")
"11-03-1997".Replace("-","/")'Result: "11/03/1997"
'Trim
"    11-03-1997    ".Trim 'Result: "11-03-1997"
"    11-03-1997".TrimStart 'Result: "11-03-1997"
"11-03-1997    ".TrimEnd 'Result: "11-03-1997"
'Remove from position
"123aaaa4567890".Remove(3,5) 'Result: "1234567890"
```

###### String to Array

```
strVariable="gabriel,dudek,vidal"
Split(strVarianble, ",")
```

###### String to Double

```vb
Convert.ToDouble(row.Item("Total").ToString) > 900
```

###### Substring

```vb
strVariable = strenghts

strVariable.Substring(3)

'If you print the result will be: enghts
```



##### ➕ Operators 

```vb
'Addition
iVariable1 + iVariable2
'Subtraction
iVariable1 - iVariable2
'Multiplication
iVariable1 * iVariable2
'Division
iVariable1 / iVarible2
dVarianle1 \ dVariable2 ' \ is used to divide double values

'& - Concatenation of two expressions
"Gabriel " & " Dudek"
strName & strSurname

'+ - Adds two numbers or returns the positive value of a numeric expression. Can also be used to concatenate two string expressions.
"Gabriel " + " Dudek"
150+150

'Like - Compares a string against a pattern
strWord Like "a*" 'Verify if starts with word "a"

'< less than
'<= less or equal
'> greater than
'>= greater or equal than
'= equals
'<> not equal
'Is Operator
'IsNot Operator
'Like Operator

```



##### 📅 Date Expressions

*It's possible to add symbols ( -, / ...) for data format*

``` vb
'Current date
DateTime.Now.AddDays(0).ToString("dd-MM-yyyy")
'Yesterday's date
DateTime.Now.AddDays(-1).ToString("dd/MM/yyyy")
'Tomorrow's date
DateTime.Now.AddDays(+1).ToString("dd/MM/yyyy")
'Month and Year
DateTime.Now.ToString("MM/yyyy")
'Fist day of current month
DateTime.Now.ToString("01/MM/yyyy")
'Last day of current month
(New DateTime(Today.AddMonths(1).Year,Today.AddMonths(1).Month,1)).AddDays(-1).ToString("dd/MM/yyyy")
'First day of previous month
DateTime.Now.AddMonths(-1).ToString("01/MM/yyyy")
'Last day of previous month
New DateTime(now.Year,now.Month,1).AddDays(-1).ToString("dd/MM/yyyy")
'Get day name
DateTime.Now.AddDays(0).ToString("dddd")
'Get month name
DateTime.Now.AddMonths(0).ToString("MMMM")
```



##### ⏲ Time Expressions

```vb
'Current hours, minutes, and seconds.
DateTime.Now.AddHours(0).ToString("hh:mm:ss")
```

*It's possible to get less and more hours by adding: `-` or `+` inside of `()`*. 



##### ❌ Killing Process

A good way to close application is using `cmd` and typing the following command:

```
taskkill /f /im process.exe

e.g.
taskkill /f /im chrome.exe
```



##### 🤖 Activities

- Multiple Assign

- Get Visible Text

- Element Exists

- Click Text

- Output Data Table (Converts DT to String)

- Retry Scope (It can be very useful using 'Try Catch')

- Element Exists

- UiPath.PDF.Activities

- Paralell

  

##### 📦 Useful Packages

- Terminal. Activities
- UiPath.Pdf.Activities
- BalaReva.ZipUnzip.Activities
- UiPathTeam.UnZipFile.Activities
- UiPath.WebAPI.Activities
- Microsoft.Activities.Expressions
- UiPath.Word.Activities

**OCR**

- Intelligent.OCR
- UiPath.DocumentUnderstanding.ML.Activities
- UiPath.OmniPage.Activities
