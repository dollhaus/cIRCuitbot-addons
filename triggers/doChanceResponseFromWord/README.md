# doChanceResponseFromWord

This trigger will detect a word, and either respond or not respond dependent on the outcome of a random boolean.

## Installation

Copy the root `doChanceResponseFromWord` folder into the `triggers` directory where you installed the main bot. Add `doChanceResponseFromWord` to the triggers section of the bot config file. 

## Customization

In order to set the word and action you want the bot to use, you must modify `trigger.conf` and set both the trigger word (defaults to `triggerword`) and the action. 

In the `trigger.conf` file, edit the first line, that starts with `trigger[]=` and change `triggerword` to the word you wish to trigger on.

Modify the text in the `action` variable to customize what you want the bot to reply with as its action.
