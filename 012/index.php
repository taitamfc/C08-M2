<?php

class Base extends Exception
{
}

class Derived extends Base
{
}

try {
   throw new Derived();
} catch (Base $b) {
   echo("Caught base class exception");
} catch (Derived $d) {
   echo("Caught derived class exception");
}