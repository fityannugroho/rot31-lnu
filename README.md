# ROT31-LNU

## Definition

**ROT31-LNU** is a chiper algorithm that using symmetric key. It is adopted from the previously invented [ROT13](https://en.wikipedia.org/wiki/ROT13) and use the same way to encrypt and decrypt.

The difference between ROT13 and ROT31-LNU lies in the key. **ROT31-LNU's key** is using 62 characters from 'a' to 'z' (*lowercase*), '0' to '9' (*numeric*), and 'A' to 'Z' (*uppercase*). This is where 'LNU' word comes from.

![The ROT31-LNU Key](ROT31-LNU-key.png)

The key is then divided in the middle into 2 parts (62 / 2 = **31 characters**), then each character is paired to another part, so that the character 'A' pairs with the character '5', 'B' with '6', and so on.

## Algorithm

**Encryption** is done by converting all the characters in the plaintext into their partner characters.

**Decryption** is done by treating the ciphertext in the same way, namely changing all the characters in the ciphertext into their partner characters.

For unlisted characters, such as space characters and symbol characters ('!', '$', etc.), these characters will remain as they were originally.

## Usage

This chiper can be used to hiding the text to become not human-readable, because its key includes all human-readable characters.

**WARNING!** This chiper algorithm is not suitable to hiding a very sensitive data, such as password, payment info, etc.

## Requirement

- PHP 5 or more.
