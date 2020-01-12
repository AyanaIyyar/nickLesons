<?php
//switch
/**
 * It's a selective structure that uses cases to evaluate conditions; if a
 * case is TRUE, the result of that case is displayed and the case terminated,
 * otherwise a FALSE result will be generated if none of the cases is TRUE.
 *
 * Syntax
 * switch(case variable)
 * {
 *      case a:
 *          statement(s) a;
 *          break;
 *      case b:
 *          statement(s) b;
 *          break;
 *      case c:
 *          statement(s) c;
 *          break;
 * .
 * .
 * .
 *      default:
 *          statement(s) x;
 *          break;
 * }
 */
$choice='F';
switch ($choice){
    case 'A':
        print "Option A Selected";
        break;
    case 'B':
        print "Option B Selected";
        break;
    case 'C':
        print "Option C Selected";
        break;
    case 'D':
        print "Option D Selected";
        break;
    default:
        print "Invalid Choice";
        break;
}