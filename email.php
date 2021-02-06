On April 15, 1912, during her maiden voyage, Titanic sinking is the most infamous shipwrek in the history. Titanic sank after colliding with an iceberg, killing 1502 out of 2224 passengers and crew. This tragedy shocked the international community and led to better safety regulations for ships.

In the challenge on Kaggle competitions, challenge takers are asked to complete the analysis of what sorts of people were likely to survive. In particular, the solvers are expected to apply the tools of machine learning to predict which passengers survived the tragedy.

For this purpose, the data and sample script files provided are as in the following lists:

Data Files
File Name		Available Formats
train			.csv (59.76 kb)
gendermodel		.csv (3.18 kb)
genderclassmodel	.csv (3.18 kb)
test			.csv (27.96 kb)

Script Files
gendermodel		.py (3.58 kb)
genderclassmodel	.py (5.63 kb)
myfirstforest		.py (3.99 kb)

Bellow are the VARIABLE DESCRIPTIONS:

survival        Survival
                (0 = No; 1 = Yes)
pclass          Passenger Class
                (1 = 1st; 2 = 2nd; 3 = 3rd)
name            Name
sex             Sex
age             Age
sibsp           Number of Siblings/Spouses Aboard
parch           Number of Parents/Children Aboard
ticket          Ticket Number
fare            Passenger Fare
cabin           Cabin
embarked        Port of Embarkation
                (C = Cherbourg; Q = Queenstown; S = Southampton)

SPECIAL NOTES:
Pclass is a proxy for socio-economic status (SES)
 1st ~ Upper; 2nd ~ Middle; 3rd ~ Lower

Age is in Years; Fractional if Age less than One (1)
 If the Age is Estimated, it is in the form xx.5

With respect to the family relation variables (i.e. sibsp and parch)
some relations were ignored.  The following are the definitions used
for sibsp and parch.

Sibling:  Brother, Sister, Stepbrother, or Stepsister of Passenger Aboard Titanic
Spouse:   Husband or Wife of Passenger Aboard Titanic (Mistresses and Fiances Ignored)
Parent:   Mother or Father of Passenger Aboard Titanic
Child:    Son, Daughter, Stepson, or Stepdaughter of Passenger Aboard Titanic

Other family relatives excluded from this study include cousins,
nephews/nieces, aunts/uncles, and in-laws.  Some children travelled
only with a nanny, therefore parch=0 for them.  As well, some
travelled with very close friends or neighbors in a village, however,
the definitions do not support such relations.


Solutions are evaluated by comparing the percentage of correct answers on a test dataset."your problem, your solution, your evaluation, and some improvement.

