# Do some coding

Clone this and `composer install`
You can add components add more tests if needed.
Please use DesignPattern name in class if you know what pattern you are using.

### 1 Kata

Having price object, how would you write Shipping and Tax objects, to change the price to 88, by passign 8 for shipping
and 20 for discount?
 Use OOP. 

Math should be `$finalPrice = (100 * (1 - 20/100)) + 8`

> What design pattern have you used?

### 2 Kata 
Simplify this price creation  by adding `PriceCalculator` class

Add would you another calculator, which calculates shipping for free?

### 3 Kata
Add another class, which decides to apply free shipping , if it is tuesday

### 4 Kata
How would you introduce DpdShippingProvider which offers cheeper shipping, they cost only 4 of money?

# Test
Use `vendor/bin/phpunit` to test your code