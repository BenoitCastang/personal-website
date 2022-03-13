string = 'Le loup a faim'
for letter in string :
    if letter in 'AEIOUYaeiouy' :
        print(letter, 'est une voyelle')
    elif letter in ' ' :
        print('*')
    else : 
        print(letter, 'est une consonne')