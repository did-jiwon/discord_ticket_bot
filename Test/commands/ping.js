const { REST } = require('@discordjs/rest');
const { Routes } = require('discord-api-types/v9');
const { CommandInteractionOptionResolver } = require('discord.js');
const { Client, Intents, Collection } = require("discord.js")
// Create a new client instance
const client = new Client({ intents: [Intents.FLAGS.GUILDS] })

// Require the necessary discord.js classes

require("dotenv").config()

const commands = [{
    name: 'ping',
    description: 'Replies with Pong!'
}];

const rest = new REST({ version: '9'}).setToken('token');

(async () => {
    try {
        console.log('Strarted refreshing application (/) commands.');

        await rest.put(
            Routes.applicationCommands(CLIENT_ID, GUILD_ID),
            {body: commands},
        );

        console.log('Successfully reloaded application (/) commands.');
    }
    catch (error) {
        console.error(error);
    }
})();