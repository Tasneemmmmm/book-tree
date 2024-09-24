import math


def egcd(a, b):
    if b == 0:
        return a, 1, 0
    else:
        gcd, x, y = egcd(b, a % b)
        return gcd, y, x - (a // b) * y


def mod_inverse(a, m):
    gcd, x, _ = egcd(a, m)
    if gcd == 1:
        return x % m
    else:
        raise ValueError("Modular inverse does not exist.")


def affine_encrypt(plaintext, a, b):
    ciphertext = ""
    for char in plaintext:
        if char.isalpha():
            if char.islower():
                
                char = chr((a * (ord(char) - ord('a')) + b) % 26 + ord('a'))
            else:
               
                char = chr((a * (ord(char) - ord('A')) + b) % 26 + ord('A'))
        ciphertext += char
    return ciphertext


def affine_decrypt(ciphertext, a, b):
    plaintext = ""
    mod_inverse_a = mod_inverse(a, 26)
    for char in ciphertext:
        if char.isalpha():
            if char.islower():
         
                char = chr((mod_inverse_a * (ord(char) - ord('a') - b)) % 26 + ord('a'))
            else:
                
                char = chr((mod_inverse_a * (ord(char) - ord('A') - b)) % 26 + ord('A'))
        plaintext += char
    return plaintext


mode = input("Choose the mode (encryption/decryption): ")

if mode.lower() == "encryption":
    plaintext = input("Enter the plaintext: ")
    a = int(input("Enter the value of 'a' for encryption: "))
    b = int(input("Enter the value of 'b' for encryption: "))

    ciphertext = affine_encrypt(plaintext, a, b)
    print("Ciphertext:", ciphertext)

elif mode.lower() == "decryption":
    ciphertext = input("Enter the ciphertext: ")
    a = int(input("Enter the value of 'a' for decryption: "))
    b = int(input("Enter the value of 'b' for decryption: "))

    decrypted_text = affine_decrypt(ciphertext, a, b)
    print("Decrypted text:", decrypted_text)

else:
    print("Invalid mode. Please choose either 'encryption' or 'decryption'.")