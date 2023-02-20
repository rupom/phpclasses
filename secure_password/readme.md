This class can be used to generate password hashes and check whether a given password matches an hash.

The class generates an hash for a password using a random salt of a given length. The hash is generated using the SHA1 algorithm appended to the salt string.

The class can also check whether a password matches a given hash. It applies the same method retrieving the salt for the hash string.
