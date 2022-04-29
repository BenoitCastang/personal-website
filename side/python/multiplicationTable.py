def multiplyInput():
    '''Ask number to multiply and how many times to do it, enter exit to leave'''
    while 1:
        # user number input
        num = input('Enter number: ') 
        # commands to exit
        if num == 'exit' or num == 'leave' or num == 'quit':
            break
        else:
            # set number and iterations
            num = int(num)
            howManyTimes = int(input('How many times to multiply:  '))
            i = 0
            # display multiplication table
            while i < howManyTimes :
                print(num, 'x', i+1, '=', (i+1)*num)
                i += 1
def multiply(num = 5, howManyTimes = 10):
    '''Display num multiplication table from num*1 to num*howManyTimes.
    (howManyTimes >= 0)'''
    i = 0
    while i < howManyTimes :
        print(num, 'x', i+1, '=', (i+1)*num)
        i += 1

multiplyInput()
# multiply(howManyTimes=3, num=7)