# determine if input year is bissextile or not
year = int(input('input year : '))
if year % 4 == 0 and year % 100 != 0 or year % 400 == 0 :
    print(year, 'is bissextile')
else :
    print(year, 'is not bissextile')