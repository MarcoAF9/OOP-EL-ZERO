<?php
/*
Public = Var
- It can be called in any scope. This means that a public property of an object can be both 
retrieved and modified from anywhere in a program - in the class, a subclass, or from outside
of the class, for example. This level is the default behavior when visibility is not declared because
of backward-compatibility concerns with PHP4, which did not have visibility
- If you did not write public besides the method or property the Interpreter Automatically read it as public

Protected
- Protected properties and methods can be accessed from inside the class they are declared,
or in any class that extends them. They can't be accessed from outside the class or subclass.

*So by other words we can say we can use public(var) property or method from anywhere in the file but 
*for the protected we can use it anywhere but only in the class.

Private
- A privet property or method can't be accessed by a subclass of the class it is defined in.
if you have a class with a protected property and a private property and then extend that class in the
subclass, you can access the protected property, but not the privet property.
*/

?>