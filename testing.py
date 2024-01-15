def string_expansion(s):
    # convert string to list
    s = list(s)
    # check if string is empty
    if len(s) == 0:
        return ""
    string_value = []
    i = 0
    while i < len(s):
        print(s[i])
        i += 1

    # print(string_value)


string_expansion("3abc")
