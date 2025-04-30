<?php

namespace Database\Seeders;

use App\Models\Quote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quotes = [
            ['quote' => 'Technology is best when it brings people together.', 'author' => 'Matt Mullenweg'],
            ['quote' => 'First, solve the problem. Then, write the code.', 'author' => 'John Johnson'],
            ['quote' => 'Any sufficiently advanced technology is indistinguishable from magic.', 'author' => 'Arthur C. Clarke'],
            ['quote' => 'The best way to predict the future is to invent it.', 'author' => 'Alan Kay'],
            ['quote' => 'Good code is its own best documentation.', 'author' => 'Steve McConnell'],
            ['quote' => 'Code is like humor. When you have to explain it, it’s bad.', 'author' => 'Cory House'],
            ['quote' => 'The web does not just connect machines, it connects people.', 'author' => 'Tim Berners-Lee'],
            ['quote' => 'Talk is cheap. Show me the code.', 'author' => 'Linus Torvalds'],
            ['quote' => 'The function of good software is to make the complex appear simple.', 'author' => 'Grady Booch'],
            ['quote' => 'In order to be irreplaceable, one must always be different.', 'author' => 'Coco Chanel'],
            ['quote' => 'Simplicity is the soul of efficiency.', 'author' => 'Austin Freeman'],
            ['quote' => 'You can’t have great software without a great team.', 'author' => 'Joel Spolsky'],
            ['quote' => 'Programming is the art of algorithm design and the craft of debugging errant code.', 'author' => 'Ellen Ullman'],
            ['quote' => 'In programming, the hard part isn’t solving problems, but deciding what problems to solve.', 'author' => 'Paul Graham'],
            ['quote' => 'Websites promote you 24/7: No employee will do that.', 'author' => 'Paul Cookson'],
            ['quote' => 'If debugging is the process of removing bugs, then programming must be the process of putting them in.', 'author' => 'Edsger Dijkstra'],
            ['quote' => 'Learning to write programs stretches your mind.', 'author' => 'Bill Gates'],
            ['quote' => 'A website without visitors is like a ship lost in the horizon.', 'author' => 'Dr. Christopher Dayagdag'],
            ['quote' => 'Programs must be written for people to read, and only incidentally for machines to execute.', 'author' => 'Harold Abelson'],
            ['quote' => 'Technology is nothing. What’s important is that you have faith in people.', 'author' => 'Steve Jobs'],
            ['quote' => 'Software is like entropy: It is difficult to grasp, weighs nothing, and obeys the Second Law of Thermodynamics; i.e., it always increases.', 'author' => 'Norman Augustine'],
            ['quote' => 'Machines take me by surprise with great frequency.', 'author' => 'Alan Turing'],
            ['quote' => 'The computer was born to solve problems that did not exist before.', 'author' => 'Bill Gates'],
            ['quote' => 'Computers are good at following instructions, but not at reading your mind.', 'author' => 'Donald Knuth'],
            ['quote' => 'The real problem is not whether machines think but whether men do.', 'author' => 'B. F. Skinner'],
            ['quote' => 'Innovation is the outcome of a habit, not a random act.', 'author' => 'Sukant Ratnakar'],
            ['quote' => 'A user interface is like a joke. If you have to explain it, it’s not that good.', 'author' => 'Martin LeBlanc'],
            ['quote' => 'Everything is designed. Few things are designed well.', 'author' => 'Brian Reed'],
            ['quote' => 'Make it work, make it right, make it fast.', 'author' => 'Kent Beck'],
            ['quote' => 'Programs are meant to be read by humans and only incidentally for computers to execute.', 'author' => 'Donald Knuth'],
            ['quote' => 'A bad website is like a grumpy salesperson.', 'author' => 'Jakob Nielsen'],
            ['quote' => 'To iterate is human, to recurse divine.', 'author' => 'L. Peter Deutsch'],
            ['quote' => 'Every great developer you know got there by solving problems they were unqualified to solve until they actually did it.', 'author' => 'Patrick McKenzie'],
            ['quote' => 'Software is a great combination between artistry and engineering.', 'author' => 'Bill Gates'],
            ['quote' => 'Your most unhappy customers are your greatest source of learning.', 'author' => 'Bill Gates'],
            ['quote' => 'The only way to do great work is to love what you do.', 'author' => 'Steve Jobs'],
            ['quote' => 'Great web design without functionality is like a sports car with no engine.', 'author' => 'Paul Cookson'],
            ['quote' => 'Don’t optimize for conversions, optimize for experience.', 'author' => 'Dharmesh Shah'],
            ['quote' => 'Software testing is a sport like hunting, it’s bughunting.', 'author' => 'Amit Kalantri'],
            ['quote' => 'The computer is incredibly fast, accurate, and stupid. Man is unbelievably slow, inaccurate, and brilliant. The marriage of the two is a force beyond calculation.', 'author' => 'Leo Cherne'],
            ['quote' => 'People don’t care about what you say, they care about what you build.', 'author' => 'Mark Zuckerberg'],
            ['quote' => 'Digital design is like painting, except the paint never dries.', 'author' => 'Neville Brody'],
            ['quote' => 'Design is not just what it looks like and feels like. Design is how it works.', 'author' => 'Steve Jobs'],
            ['quote' => 'Programming today is a race between software engineers striving to build bigger and better idiot-proof programs, and the universe trying to produce bigger and better idiots. So far, the universe is winning.', 'author' => 'Rick Cook'],
            ['quote' => 'If you think technology can solve your problems, then you don’t understand technology — and you don’t understand your problems.', 'author' => 'Bruce Schneier'],
            ['quote' => 'Technology over technique produces emotionless design.', 'author' => 'Daniel Mall'],
            ['quote' => 'To err is human – and to blame it on a computer is even more so.', 'author' => 'Robert Orben'],
            ['quote' => 'A good programmer is someone who always looks both ways before crossing a one-way street.', 'author' => 'Doug Linder'],
            ['quote' => 'The best thing about a boolean is even if you are wrong, you are only off by a bit.', 'author' => 'Anonymous'],
            ['quote' => 'Computers are useless. They can only give you answers.', 'author' => 'Pablo Picasso'],
            ['quote' => 'There are only two kinds of languages: the ones people complain about and the ones nobody uses.', 'author' => 'Bjarne Stroustrup'],
            ['quote' => 'The only “intuitive” interface is the nipple. After that it’s all learned.', 'author' => 'Bruce Ediger'],
            ['quote' => 'The most disastrous thing you can do is to try to get visitors to convert before they are ready.', 'author' => 'Peep Laja'],
            ['quote' => 'It’s easier to ask forgiveness than it is to get permission.', 'author' => 'Grace Hopper'],
            ['quote' => 'Software is eating the world.', 'author' => 'Marc Andreessen'],
            ['quote' => 'Design adds value faster than it adds costs.', 'author' => 'Joel Spolsky'],
            ['quote' => 'Never trust a computer you can’t throw out a window.', 'author' => 'Steve Wozniak'],
            ['quote' => 'Success is a lousy teacher. It seduces smart people into thinking they can’t lose.', 'author' => 'Bill Gates'],
            ['quote' => 'A program is never less than 90% complete and never more than 95% complete.', 'author' => 'Terry Baker'],
            ['quote' => 'Perfection is achieved not when there is nothing more to add, but rather when there is nothing more to take away.', 'author' => 'Antoine de Saint-Exupéry'],
            ['quote' => 'Design is intelligence made visible.', 'author' => 'Alina Wheeler'],
            ['quote' => 'Java is to JavaScript what car is to carpet.', 'author' => 'Chris Heilmann'],
            ['quote' => 'Computers are like Old Testament gods; lots of rules and no mercy.', 'author' => 'Joseph Campbell'],
            ['quote' => 'Be stubborn on vision but flexible on details.', 'author' => 'Jeff Bezos'],
            ['quote' => 'Stay hungry, stay foolish.', 'author' => 'Steve Jobs'],
            ['quote' => 'Work hard, have fun, make history.', 'author' => 'Jeff Bezos'],
            ['quote' => 'If you double the number of experiments you do per year, you’re going to double your inventiveness.', 'author' => 'Jeff Bezos'],
            ['quote' => 'Inspiration is the most important part of our digital strategy.', 'author' => 'Paull Young'],
            ['quote' => 'One machine can do the work of fifty ordinary men. No machine can do the work of one extraordinary man.', 'author' => 'Elbert Hubbard'],
            ['quote' => 'Responsive Web Design always plays an essential role whenever going to promote your website.', 'author' => 'Mike Gonzalez'],
            ['quote' => 'SEO is not something you do anymore. It’s what happens when you do everything else right.', 'author' => 'Chad Pollitt'],
            ['quote' => 'The goal is to turn data into information, and information into insight.', 'author' => 'Carly Fiorina'],
            ['quote' => 'It’s not information overload. It’s filter failure.', 'author' => 'Clay Shirky'],
            ['quote' => 'Information is the oil of the 21st century, and analytics is the combustion engine.', 'author' => 'Peter Sondergaard'],
            ['quote' => 'Design is the silent ambassador of your brand.', 'author' => 'Paul Rand'],
            ['quote' => 'Content precedes design. Design in the absence of content is not design, it’s decoration.', 'author' => 'Jeffrey Zeldman'],
            ['quote' => 'It’s not about how to get traffic. It’s about how to get relevant and targeted traffic.', 'author' => 'Adam Audette'],
            ['quote' => 'You can’t manage what you can’t measure.', 'author' => 'Peter Drucker'],
            ['quote' => 'If you can’t explain it simply, you don’t understand it well enough.', 'author' => 'Albert Einstein'],
            ['quote' => 'You should learn from your competitor, but never copy.', 'author' => 'Jack Ma'],
            ['quote' => 'Don’t make me think.', 'author' => 'Steve Krug'],
            ['quote' => 'Design creates culture. Culture shapes values. Values determine the future.', 'author' => 'Robert L. Peters'],
            ['quote' => 'Every line of code is a story.', 'author' => 'Anonymous'],
            ['quote' => 'The future belongs to those who learn more skills and combine them in creative ways.', 'author' => 'Robert Greene'],
            ['quote' => 'One accurate measurement is worth more than a thousand expert opinions.', 'author' => 'Grace Hopper'],
            ['quote' => 'A good website is not just a pretty face. It’s a strong handshake.', 'author' => 'Anonymous'],
            ['quote' => 'Behind every great website is a developer who refused to quit.', 'author' => 'Anonymous']
        ];

        foreach ($quotes as $quote) {
            Quote::create($quote);
        }
    }
}
