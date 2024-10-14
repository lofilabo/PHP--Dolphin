October 14th 2024

Intro to Project.

i. CONSTRUCTION

This project is intended to be easy to read and not to be terribly impressive
viz. method or construction.  For Instance: eagle-eyed observer will notice
and may criticise the absence of any Object-Oriented features. The answer to 
the 'why not...?' question is simply: not needed.

Some aspets of the programme are considered to benefit from being split into 
function.  There is a value is using the MVC pattern here: the Model is contained 
within the txt file which holds the data; so the display-data section is contained 
within a function of its own ('V').  This function could, of course, be contained
within its own Object.

ii. WHERE IS WHAT ?

In this directory, the following files are visible:

	index.php		Entry point

	data.txt		Basic Test Data

	data_sameas.txt		Copy of Previous

	akshun.php		Pseudo-English title ^.^ 
				File which holds the ACTION!!! functions

iii.  RUNNING

Position the Command Interpreter to point at This directory.

Start the program by running (for instance)

	 php -S localhost:8000

and then, in your Web Monitoring Application Of Choice,
look at:

	http://localhost:8000/

From running, you should see that the file data.txt is named in the DATA FILE
entry area.  This can be changed (for instance, to the spare file data_sameas.txt).

Upon execution, the simplest-possible Solution is followed:
move to a different PHP source file.  The amateurishness of this is recognised.
The reason for it is to keep the two, distinct parts of the 'programme' separated.

iv. WHAT AM I SEEING ?

The results should be evident (since we hope that the Requirement is satisfied!!)

Points of interest:
a Data Value is defined ONLY by the letters inside, and not by their order,

i.e.	a b c == b c a == c a b

so all possible 'versions' of this are identied as members of a group which has the 
name moved to alphabetical order.

i.e.    a z m , z m a , m a z
would all be considered to be Members of the Group [amz], although none of them
have the Name 'amz' (equality!)

v. FUTURE.

This is not perfect.  One of the important reasons for v.0.0.0.0.1(Beta) is that 
the Customer / End-User / Boss / Investor can feed back on requirements (that is my 
excuse, and I will stand by it: 'Better to shift a Prototype ahead of time, and 
execute Change Requests')

End Users are invited to feed back on Changes which should happen before v.1.0 can be
claimed....... :)

vi. ME

If you have any questions, please contact me:

Richard J W Amphlett
07943 842 381
01384 396 074 <<--this is recommended.  Indoors and reliable

richardlofi@gmail.com

Skype: wretched-z 
(please say this Skype ID in a Stoke-On-Trent accent: 'Richard Said...')


