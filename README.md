JSOTP
=====

Compact One Time Password Generator (RFC6238)

#Introduction

In one of previous articles I've briefly demonstrated how OTP value is calculated
(http://labs.voronenko.info/109454540) as well as shared compact set of PHP classes and libraries
that allow OTP calculation in your server side code (http://labs.voronenko.info/php-implementation-of-the-otp-algorythm-77519).
This approach assumed that you want your customer to use google authenticator tool in order to get the OTP value.
For example, such approach is used by LastPass password service. But what if you want some customized UI for OTP token generator?
You might need want this UI to be branded with your application/service skin, etc?

This article will show how to deal with it.

#Background

The OTP token generator program is usually an application on some mobile device: IOS or Android based.
Both platforms support HTML5 very well, and this allows us to implement our OTP generator in pure HTML/Javascript,
as a single page application.

## Challenges to solve
  * Implement OTP token generation in javascript
  * Implement UI and logic to change the code each 30 seconds
  * Ensure that implemented solution is capable working in offline.

Let's go step by step.

## OTP token generation in javascript.
As you might recall from by previous article we need following ingridients for our algorythm:

* base32 conversion library,
* sha1 cryptho algorythm implementation
* HMAC & OTP algorythm implementation if present.

We prefer libraries with MIT or lGPL licenses in order to be able to license our solution as free for commercial use.
For base32 implementation I definitely recommend nibbler library: http://www.tumuski.com/2010/04/nibbler/ it has minor
glitches with padding, but the issue is rare and community patch is present.

For Sha1 algorythm and other cryptho algorythms in javascript I recommend CryptoJS library by google
http://code.google.com/p/crypto-js/. CryptoJS is a growing collection of standard and secure cryptographic algorithms
implemented in JavaScript using best practices and patterns. They are fast, and they have a consistent and simple
interface. Library is still supported and developed at the present moment. We can find there both sha1 and hmac
implementations - brilliant!





#Using the code

A brief description of how to use the article or code. The
class names, the methods and properties, any tricks or tips.
Blocks of code should be set as style "Formatted"

#Points of Interest

Did you learn anything interesting/fun/annoying while writing
the code? Did you do anything particularly clever or wild or zany?

#History

Keep a running update of any changes or improvements you've
made here.